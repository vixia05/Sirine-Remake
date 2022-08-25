<?php

namespace App\Http\Livewire\SuperUser;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Models\UserDetails;

class ListUsers extends Component
{
    use WithPagination;
    public $np, $role, $data_id, $name;
    public $updateMode = false;

    public function render()
    {
        $data   = User::paginate(15);
        return view('livewire.super-user.list-users',['data' => $data]);
    }

    private function resetInputFields(){
        $this->role = '';
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->data_id = $id;
        $this->np   = $user->np;
        $this->name = UserDetails::where('np_user',$user->np)->value('nama');
        $this->role = $user->level;

        $this->updateMode = true;
    }


    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validateData = $this->validate([
            'np' => 'required',
            'role' => 'required',
        ]);

        $user = User::find($this->data_id);
        $user->update([
            'np' => $this->np,
            'level' => $this->role,
        ]);

        $this->updateMode = false;

        session()->flash('messageUpdate', 'Data '.$this->name.' Berhasil Di Perbaharui');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $this->data_id = $id;
        $this->np   = $user->np;
        $this->name = UserDetails::where('np_user',$user->np)->value('nama');
        $this->role = $user->level;
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        session()->flash('messageDelete', 'User Berhasil Di Hapus');
    }

}