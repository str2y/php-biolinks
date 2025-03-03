<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Link extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function moveUp()
    {
        $this->move(-1);
    }

    public function moveDown()
    {
        $this->move(+1);
    }

    /**
     * Fucntion responsible for reordering the link
     *
     * @param int $to +1 for moving down, -1 for moving up
     * @return void
     */
    private function move($to)
    {
        $order = $this->sort;
        $newOrder = $order + $to;
        $swapWith = $this->user->links()->where('sort', '=', $newOrder)->first();
        $this->fill(['sort' => $newOrder])->save();
        $swapWith->fill(['sort' => $order])->save();
    }
}
