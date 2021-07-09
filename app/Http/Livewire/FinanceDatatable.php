<?php

namespace App\Http\Livewire;

use App\Models\Finance;
use Livewire\Component;
use Livewire\WithPagination;

class FinanceDatatable extends Component
{
    use WithPagination; 

    public $showPopUp = true;
    public $idForDel;
    public $searchTerm;
    public $searchResult = [];

    public $payee;
    public $nonPayee;
    public function mount(){
        $this->searchResult = finance::all();
    } 


    public function showPopUp($id){
        $this->idForDel = $id;
        $this->showPopUp = false;
    }

    public function cancel(){
        $this->idForDel = "";
        $this->showPopUp = true;
    }
    public function destroy(){
        
        $finance = Finance::find($this->idForDel);
        $finance->delete();
        $this->showPopUp = true;
    }


    public function payeeClicked(){

        $this->nonPayee = false;

        if ($this->payee == "payee"){
            $this->searchResult = Finance::where("cotisation", "<>", "0")->get();
        }
       
    }


    public function nonPayeeClicked(){

        $this->payee = false;

        if ($this->nonPayee == "nonPayee"){
            $this->searchResult = Finance::where("cotisation", "=", "0")->get();
        }
       
    }
    
    public function render()
    {

        if(auth()->user()->type_adherent==="Simple Membre"){

            return view('livewire.finance-datatable', [
                'finances' => Finance::where('code_adherent', auth()->id())->get()
            ]);

        }

        return view('livewire.finance-datatable', [
            'finances' => $this->searchResult
        ]);
        
        
    }
    
}
