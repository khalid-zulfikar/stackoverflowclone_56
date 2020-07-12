<!-- <p>Link 1</p>
<a data-toggle="modal" data-id="ISBN564541" title="Add this item" class="open-AddBookDialog btn btn-primary" href="#addBookDialog">test</a>

<p>Link 2</p>
<a data-toggle="modal" data-id="ISBN-001122" title="Add this item" class="open-AddBookDialog btn btn-primary" href="#addBookDialog">test</a> -->

<div class="modal hide" id="addBookDialog">
<div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
          <h3>Balas Komentar</h3>
          <button class="close" data-dismiss="modal">×</button>
        </div>
          <div class="modal-body">

            <form method="post" action="{{ route('reply.add') }}">
                @csrf
                
                <div class="form-group">
                    
                    <textarea name="content" class="form-control my-editor">{!! old('content', $content ?? '') !!}</textarea>

                    <input type="hidden" name="quest_id" value="{{ $quest_id }}" />
                    <input type="hidden" name="comment_id" id="bookId" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-warning" value="Reply" />
                </div>
            </form>

          </div>
        </div>
      </div>
</div>