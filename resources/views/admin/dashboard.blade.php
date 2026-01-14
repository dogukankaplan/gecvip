@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-number">{{ $unreadCount }}</div>
            <div class="stat-label">Okunmamış Mesaj</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">{{ $totalCount }}</div>
            <div class="stat-label">Toplam Mesaj</div>
        </div>
    </div>

    <div class="card">
        <h2 class="card-title">Son Mesajlar</h2>

        @if($recentMessages->isEmpty())
            <p style="color: #666;">Henüz mesaj yok.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>İsim</th>
                        <th>E-posta</th>
                        <th>Tarih</th>
                        <th>Durum</th>
                        <th>İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recentMessages as $message)
                        <tr>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->created_at->format('d.m.Y H:i') }}</td>
                            <td>
                                @if(!$message->is_read)
                                    <span class="badge badge-new">Yeni</span>
                                @else
                                    <span class="badge badge-read">Okundu</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.message.show', $message->id) }}"
                                    class="btn btn-primary btn-sm">Görüntüle</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <div style="margin-top: 20px;">
            <a href="{{ route('admin.messages') }}" class="btn btn-primary">Tüm Mesajları Görüntüle</a>
        </div>
    </div>
@endsection