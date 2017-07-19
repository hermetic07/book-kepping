<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use App\Ledger;
use App\Account;
use App\Client;
use Illuminate\Support\Facades\Input;
use Exception;
class ViewControl extends Controller
{



	public function getData()
	{
		$titles = Account::All();
		return view('Ledger')->with('a',$titles)->with('b',$titles)->with('c',$titles)->with('d',$titles)->with('e',$titles)->with('f',$titles)->with('g',$titles)->with('h',$titles)->with('i',$titles)->with('j',$titles);
	}

	public function test()
	{
		return view('test');
	}

	public function getClient(Request $request)
	{

			try {
				$id = $request->id;
				$client = Client::find($id);
				$data = "";

					$data= "<table>
					  <thead>
					  </thead>

					  <tbody>

					    <tr>
					      <td>Client ID:</td>
					      <td>"    .$client->id."</td>
					    </tr>
					    <tr>
					      <td>Name:</td>
					      <td>"    .$client->name."</td>
					    </tr>
					    <tr>
					      <td>Address:</td>
					      <td>"    .$client->address."</td>
					    </tr>

					  </tbody>

					</table>";

				return $data;
			} catch (Exception $e) {
				return($e);
			}

	}

	public function generalLedger(Request $request)
	{
		//get all debit account from ajax
		$alldebit = Input::get('debit');
		//get all credit account from ajax
		$allcredit = Input::get('credit');
		$alldesc = Input::get('desc1');
		$alldesc2 = Input::get('desc2');
		$index1 = 0;
		//smart counter for ledger id
		$count = Ledger::get()->count();
		$ledID = "LEDGER".$count;
		try {
			foreach($alldebit as $a) {
				//save debit account first
				$index2 = 0;
				$ledger = new Ledger();
				$ledger->ledger_id =$ledID;
				$explod = explode('/',$a); //separate the combined values earlier [amount/description]
				$ledger->title = "$explod[1]";
				$ledger->amount = (int)$explod[0];
				$ledger->debcred = "debit";
				$norm = Account::where("account_name","$explod[1]")->get(); //get the normal balance of the account title

				foreach ($norm as $n) {
					$ledger->normal_balance = $n->normal_balance; //for each is used because the returned value of the query is an array
				}
				foreach($alldesc as $b)
				{
					//find the description then save
					if($index1===$index2)
					{
						$ledger->description = $b;
						$ledger->save();

					}
					$index2+=1;
				}
				$index1+=1;
			}
			$index1 = 0;
			foreach($allcredit as $a) {
				//save credit account
				$index2 = 0;
				$ledger = new Ledger();
				$ledger->ledger_id =$ledID;
				$explod = explode('/',$a); //separate the combined values earlier [amount/description]
				$ledger->title = "$explod[1]";
				$ledger->amount = (int)$explod[0];
				$ledger->debcred = "credit";
				$norm = Account::where("account_name","$explod[1]")->get();
				foreach ($norm as $n) {

					$ledger->normal_balance = $n->normal_balance;
				}
				foreach($alldesc2 as $b)
				{
					//find the description then save
					if($index1===$index2)
					{
						$ledger->description = $b;
						$ledger->save();
					}
					$index2+=1;
				}
				$index1+=1;
			}
		} catch (Exception $e) {
			return($e);
		}
		// if nothing fails put ledger id to session for retrieving datas later in creating general ledger
		session(['key' => $ledID]);
		return "ok";

	}

	public function viewGenLedger(Request $request)
	{
		//get the ledger id from session
		$value = $request->session()->get('key');
		// retrieve  data using ledger id sorted by account title
		$amounts = Ledger::where('ledger_id', $value)->orderBy('title')->get();

		$count=0;
		$accountname="";
		// get the first account title
		foreach ($amounts as $a) {
			if ($count===0) {
				$accountname = $a->title;
			}
			$count+=1;
			break;
		}
		$count=0;
		$total=0;
		return view('genledger')->with('amounts',$amounts)->with('an',$accountname)->with('c',$count)->with('t',$total);
	}

	public function viewTrialBalance(Request $request)
	{
		//get the ledger id from session
		$value = $request->session()->get('key');
		// retrieve  data using ledger id sorted by account title
		$amounts = Ledger::where('ledger_id', $value)->where('title','!=' ,"")->orderBy('title')->get();

		$count=0;
		$accountname="";
		$norm = "";
		// get the first account title and its normal balance
		foreach ($amounts as $a) {
			if ($count===0) {
				$accountname = $a->title;
				$norm = $a->normal_balance;
			}
			$count+=1;
			break;
		}
		$ctotal=0;
		$dtotal=0;
		$total=0;
		return view('trialbalance')->with('amounts',$amounts)->with('an',$accountname)->with('norm',$norm)->with('debit',$dtotal)->with('credit',$ctotal)->with('t',$total);
	}

}
