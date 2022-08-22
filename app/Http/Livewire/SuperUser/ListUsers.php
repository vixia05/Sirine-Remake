<?php

namespace App\Http\Livewire\SuperUser;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Models\UserDetails;

class ListUsers extends Component
{
    use WithPagination;
    public $np, $role, $data_id;
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
        $this->nama = UserDetails::where('np_user',$user->np)->value('nama');
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
            'role' => $this->role,
        ]);

        $this->updateMode = false;

        session()->flash('message', 'Role Update Succesfully.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'User Deleted Successfully');
    }

}
