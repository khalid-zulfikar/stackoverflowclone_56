<hr>
@foreach($comments as $comment)   
    <div class="card-body">
        <div class="display-comment">
            <strong>{{ $comment->user->name }}</strong>
            <p>{!! $comment->content_comment !!}</p>
            <a href="" id="reply"></a>
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">
                @if(Auth::user())

                    <a data-toggle="modal" data-id="{{ $comment->id }}" title="Add this item"  class="open-AddCommentDialog float-right btn btn-outline-primary ml-2" href="#addCommentDialog" style="display : inline"> <i class="fa fa-reply"></i> Balas</a>
        	    @endif
                    <form action="{{ route('like.comment') }}" method="post">
                        @csrf
                        <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                      
                    </form>
                </div>
                @if(Auth::user()&& $comment->user_id == Auth::user()->id)
                <div class="input-group">
                    <div class="pull-right"> 
                        <div class="btn-group"> 
                            <button class="btn dropdown-toggle" 
                                    data-toggle="dropdown"> 
                            </button> 
                            <ul class="dropdown-menu pull-right"> 
                                <li> 
                                <a data-toggle="modal" data-id="{{ $comment->id }}" data-parent_id="{{ $comment->parent_id }}" data-comment="{{ $comment->content_comment }}" title="Edit this item"  class="open-EditCommentDialog float-right btn btn-outline-primary ml-2" href="#editCommentDialog" >Edit</a> 
                                </li> 
                                <li> 
                                    <form action="/comment/{{$comment->id}}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger ">Hapus</button>
                                    </form>
                                </li> 
                            </ul> 
                        </div> 
                    </div>
                </div>
                @endif
            </div>
            @include('partials._modal')           
            @include('partials._comment_replies', ['comments' => $comment->replies])         
            </div>
        </div>
@endforeach