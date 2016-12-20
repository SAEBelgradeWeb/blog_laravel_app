<div class="form-group">
    <label for="title">Title</label>
    <input type="text" id="title" name="title" class="form-control" value="{{$post->title}}">
</div>

<div class="form-group">
    <label for="title">Content</label>
    <textarea id="body" class="form-control" name="body">{{$post->body}}</textarea>
</div>

<div class="form-group">
    <label for="tags">Tags</label>
    <select name="tags[]" id="tags" class="form-control" multiple>
        @foreach($tags as $key => $tag)

            <option value="{{ $key }}"  {{ (in_array($key, $post->tags->pluck('id')->toArray())) ? "selected" : "" }}>{{ $tag }}</option>
        @endforeach
    </select>
</div>