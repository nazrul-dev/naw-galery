<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Mydownline extends Component
{
    public User $user;
    public $downlines;
    public function mount(){
        if(auth()->id() < $this->user->id){
            $this->downlines = $this->user->where('referal', $this->user->username)->where('id', '!=', $this->user->id)->get();
        }else{
            abort(403, 'Anda Tidak Memiliki Hak Untuk Melihat Profil Ini');
        }


    }
    function getAllDownlines($fathers) {
        $ref_id = 42;
        $arr_members = array();

        while( true )
        {
          $rs = mysql_query( 'SELECT whatever FROM table WHERE refid = $refid' );
          if( !mysql_num_rows( $rs ) )
            break;

          $row = mysql_fetch_array( $rs );
          $arr_members[] = $row;
          $refid = $row['userid'];
        }

    }

    public function render()
    {

        return view('livewire.mydownline');
    }
}
