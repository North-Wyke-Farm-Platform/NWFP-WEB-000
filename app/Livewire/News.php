<?php
namespace App\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Publication;

class News extends Component
{
    public $ref_type;
    public string $searchRef = "";
    public $publications;
    public string $searchAuth = "";
    public $news;
    public $years;
    public $view = "livewire.news";
    public $data = array();
    public $latest;


    public function mount() {


        $this -> years = Publication::select('pub_year')->distinct('pub_year')->orderBy('pub_year', 'DESC')->get();

        if ($this -> latest == "YES") {
           $this -> news = Publication::where('ref_type', 'ilike', '%News%')
        ->when($this->searchRef !== '', fn(Builder $query) => $query->where('title', 'ilike', '%'. $this->searchRef .'%'))
        ->when($this->searchAuth !== '', fn(Builder $query) => $query->where('authors', 'ilike', '%'. $this->searchAuth .'%'))
        -> orderBy('issue_date','DESC')
          ->take(1)->get();
        $this -> view = "livewire.news.latest";

        } else {
            $this -> news = Publication::where('ref_type', 'ilike', '%News%')
        ->when($this->searchRef !== '', fn(Builder $query) => $query->where('title', 'ilike', '%'. $this->searchRef .'%'))
        ->when($this->searchAuth !== '', fn(Builder $query) => $query->where('authors', 'ilike', '%'. $this->searchAuth .'%'))
        -> orderBy('issue_date','DESC')
          ->get();
        }

        $this -> data = [
                'news'=> $this->news,
                'years' => $this -> years,
            ];


    }
    public function render()
    {


         return view (
                $this -> view,
                $this -> data )
            ->layout('layouts.guest');
    }
}
