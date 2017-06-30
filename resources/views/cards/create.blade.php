
                           <form method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id  }}">
                            <div class="form-group">
                                <label for="post-title">Titel</label>
                                <input type="text" id="post-title" class="form-control" name="title"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="post-slug">Gegenereerde slug</label>
                                <input type="text" id="post-slug" class="form-control" name="slug"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="message-body">Tekst</label>
                                <textarea id="message-body" class="form-control" name="text"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default pull-right">Plaatsen</button>
                        </form>