<div>
    <h5 class="mb-3">Bình luận</h5>

    {{-- Form comment --}}
    @auth
    <textarea wire:model.defer="comment"
        class="form-control mb-2"
        rows="3"
        placeholder="Nhập bình luận..."></textarea>

    @error('comment')
        <small class="text-danger">{{ $message }}</small>
    @enderror

    <button wire:click="addComment" class="btn btn-primary btn-sm mb-4">
        Gửi bình luận
    </button>
    @else
        <p class="text-muted">Vui lòng đăng nhập để bình luận</p>
    @endauth

    {{-- List comments --}}
    @foreach($comments as $c)
        <div class="border rounded p-3 mb-3">
            <strong>{{ $c->user->full_name }}</strong>
            <small class="text-muted">
                • {{ $c->created_at->diffForHumans() }}
            </small>

            <p class="mt-2">{{ $c->comment }}</p>

            {{-- Reply --}}
            @auth
            <a href="#"
               class="text-primary text-sm"
               wire:click.prevent="$set('replyingTo', {{ $c->id }})">
                Trả lời
            </a>

            @if($replyingTo === $c->id)
                <div class="mt-2">
                    <textarea wire:model.defer="reply.{{ $c->id }}"
                        class="form-control mb-2"
                        rows="2"
                        placeholder="Nhập trả lời..."></textarea>

                    <button wire:click="replyComment({{ $c->id }})"
                        class="btn btn-secondary btn-sm">
                        Gửi
                    </button>
                </div>
            @endif
            @endauth

            {{-- Replies --}}
            @foreach($c->replies as $r)
                <div class="border-start ps-3 mt-3">
                    <strong>{{ $r->user->full_name }}</strong>
                    <small class="text-muted">
                        • {{ $r->created_at->diffForHumans() }}
                    </small>
                    <p class="mt-1">{{ $r->comment }}</p>
                </div>
            @endforeach
        </div>
    @endforeach
</div>

