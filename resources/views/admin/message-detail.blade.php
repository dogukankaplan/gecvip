@extends('admin.layout')

@section('title', 'Mesaj Detayı')

@section('content')
    <div class="card">
        <h2 class="card-title">
            Mesaj Detayı
            @if(!$message->is_read)
                <span class="badge badge-new" style="font-size: 12px; vertical-align: middle;">Yeni</span>
            @endif
        </h2>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 30px;">
            <div>
                <strong style="color: #666;">İsim:</strong>
                <p style="font-size: 16px; margin-top: 5px;">{{ $message->name }}</p>
            </div>
            <div>
                <strong style="color: #666;">E-posta:</strong>
                <p style="font-size: 16px; margin-top: 5px;">
                    <a href="mailto:{{ $message->email }}" style="color: #34776f;">{{ $message->email }}</a>
                </p>
            </div>
            <div>
                <strong style="color: #666;">Telefon:</strong>
                <p style="font-size: 16px; margin-top: 5px;">{{ $message->phone ?? '-' }}</p>
            </div>
            <div>
                <strong style="color: #666;">Şirket:</strong>
                <p style="font-size: 16px; margin-top: 5px;">{{ $message->company ?? '-' }}</p>
            </div>
            <div>
                <strong style="color: #666;">Ülke:</strong>
                <p style="font-size: 16px; margin-top: 5px;">{{ $message->country ?? '-' }}</p>
            </div>
            <div>
                <strong style="color: #666;">Tarih:</strong>
                <p style="font-size: 16px; margin-top: 5px;">{{ $message->created_at->format('d.m.Y H:i') }}</p>
            </div>
        </div>

        <div style="margin-bottom: 30px;">
            <strong style="color: #666;">Mesaj:</strong>
            <div style="background: #f8f9fa; padding: 20px; border-radius: 6px; margin-top: 10px;">
                {!! nl2br(e($message->message)) ?: '<em style="color: #999;">Mesaj yok</em>' !!}
            </div>
        </div>

        <div style="display: flex; gap: 10px;">
            <a href="{{ route('admin.messages') }}" class="btn btn-primary">← Geri Dön</a>
            <a href="mailto:{{ $message->email }}" class="btn btn-primary">Yanıtla</a>
            <form action="{{ route('admin.message.delete', $message->id) }}" method="POST" style="display: inline;"
                onsubmit="return confirm('Silmek istediğinize emin misiniz?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Sil</button>
            </form>
        </div>
    </div>
@endsection