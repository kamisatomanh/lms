<div>
    {{-- Button chat --}}
    <button wire:click="toggle"
        style="
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: #0d6efd;
        color: white;
        font-size: 24px;
        border: none;
        z-index: 9999;
    ">
        💬
    </button>

    {{-- Chat window --}}
    @if($open)
    <div style="
        position: fixed;
        bottom: 90px;
        right: 20px;
        width: 320px;
        height: 420px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,.2);
        display: flex;
        flex-direction: column;
        z-index: 9999;
    ">
        <div style="padding:10px;font-weight:bold;border-bottom:1px solid #ddd">
            AI Hỗ trợ học tập
        </div>

        <div style="flex:1;overflow:auto;padding:10px">
            @foreach($messages as $msg)
                <div style="margin-bottom:8px;text-align:{{ $msg['from']=='user'?'right':'left' }}">
                    <span style="
                        display:inline-block;
                        padding:6px 10px;
                        border-radius:10px;
                        background: {{ $msg['from']=='user'?'#0d6efd':'#f1f1f1' }};
                        color: {{ $msg['from']=='user'?'white':'black' }};
                    ">
                        {{ $msg['text'] }}
                    </span>
                </div>
            @endforeach
        </div>

        <div style="padding:10px;border-top:1px solid #ddd">
            <input type="text"
                wire:model.defer="message"
                wire:keydown.enter="send"
                placeholder="Nhập câu hỏi..."
                style="width:100%;padding:6px">
        </div>
    </div>
    @endif
</div>
