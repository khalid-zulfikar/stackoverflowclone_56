<hr>
@foreach($comments as $comment)   
    <div class="card-body">
        <div class="display-comment">
            <strong>{{ $comment->user->name }}</strong>
            <p>{!! $comment->content_comment !!}</p>
            <a href="" id="reply"></a>
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">
                    <a data-toggle="modal" data-id="{{ $comment->id }}" title="Add this item"  class="open-AddBookDialog float-right btn btn-outline-primary ml-2" href="#addBookDialog" style="display : inline"> <i class="fa fa-reply"></i> Balas</a>
        	        <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Suka</a>
                </div>
                <div class="input-group">
                    <div class="pull-right"> 
                        <div class="btn-group"> 
                            <button class="btn dropdown-toggle" 
                                    data-toggle="dropdown"> 
                            </button> 
                            <ul class="dropdown-menu pull-right"> 
                                <li> 
                                    <a href="#">{{ $comment->id }}Edit</a> 
                                </li> 
                                <li> 
                                    <form action="/comment/{{$comment->id}}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm ">Hapus</button>
                                    </form>
                                </li> 
                            </ul> 
                        </div> 
                    </div>
                </div>
            </div>
            @include('partials._modal')           
            @include('partials._comment_replies', ['comments' => $comment->replies])         
            </div>
        </div>
@endforeach