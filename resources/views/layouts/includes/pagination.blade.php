<div class="text-center mb-3">
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center pagination-separate pagination-flat">
            @if($pagination->currentPage() > 1)
            <li class="page-item"> 
                <a class="page-link" style="color:gray" href="{!! $pagination->previousPageUrl()!!}" aria-label="Previous">
                    <span aria-hidden="true">Voltar</span>
                    <span class="sr-only">Voltar</span>
                </a>
            </li>
            @endif
            @for($i=1; $i<=$pagination->lastPage(); $i++)
                @if($i > $pagination->currentPage()-5 && $i < $pagination->currentPage()+5)
                    @if($i == $pagination->currentPage())
                    <li class="page-item active">
                        <a class="page-link" href="#">{{ $pagination->currentPage()}}</a>
                    <li>
                    @else
                    <li class="page-item">
                        <a class="page-link" style="color:gray" href="{!! $pagination->url($i)!!}">{{$i}}</a>
                    </li>
                    @endif
                @endif
            @endfor
            @if($pagination->currentPage() < $pagination->lastPage())
                <li class="page-item">
                    <a class="page-link" style="color:gray" href="{!! $pagination->nextPageUrl()!!}" aria-label="Next">
                        <span aria-hidden="true">Avançar</span>
                        <span class="sr-only">Avançar</span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</div>  