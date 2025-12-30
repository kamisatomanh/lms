<div class="mt-4">
    <h4>Đánh giá khóa học</h4>

    {{-- Tổng quan --}}
    <div class="mb-3">
        <strong>{{ number_format($average, 1) }}/5</strong>

        <span class="text-warning">
            @for($i = 1; $i <= 5; $i++)
                {{ $i <= round($average) ? '★' : '☆' }}
            @endfor
        </span>

        <small class="text-muted">({{ $total }} đánh giá)</small>
    </div>

    {{-- Form --}}
    @auth
        @if($canRate)
            <form wire:submit.prevent="submit">
                <div class="mb-2">
                    <select wire:model="ratingValue" class="form-select">
                        <option value="">Chọn số sao</option>
                        @for($i=1;$i<=5;$i++)
                            <option value="{{ $i }}">{{ $i }} sao</option>
                        @endfor
                    </select>
                    @error('ratingValue') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-2">
                    <textarea wire:model="comment" class="form-control"
                              placeholder="Nhận xét (không bắt buộc)"></textarea>
                </div>

                <button class="btn btn-primary">Gửi đánh giá</button>
            </form>
        @else
            <div class="alert alert-info mt-2">
                Bạn đã đánh giá khóa học này
            </div>
        @endif
    @else
        <div class="alert alert-warning">
            Vui lòng đăng nhập để đánh giá
        </div>
    @endauth

    {{-- Danh sách đánh giá --}}
    <!-- <div class="mt-4">
        @foreach($ratings as $item)
            <div class="border-bottom pb-2 mb-2">
                <strong>{{ $item->user->full_name }}</strong>
                <span class="text-warning">
                    @for($i=1;$i<=5;$i++)
                        {{ $i <= $item->rating ? '★' : '☆' }}
                    @endfor
                </span>
                <p class="mb-1">{{ $item->comment }}</p>
                <small class="text-muted">
                    {{ $item->created_at->format('d/m/Y') }}
                </small>
            </div>
        @endforeach
    </div> -->
</div>
