@extends('admin.layout')

@section('title', 'Mesajlar')

@section('content')
    <div class="card">
        <h2 class="card-title">Tüm Mesajlar</h2>

        @if($messages->isEmpty())
            <p style="color: #666;">Henüz mesaj yok.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>İsim</th>
                        <th>E-posta</th>
                        <th>Şirket</th>
                        <th>Tarih</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{ $message->id }}</td>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->company ?? '-' }}</td>
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
                                <form action="{{ route('admin.message.delete', $message->id) }}" method="POST"
                                    style="display: inline;" onsubmit="return confirm('Silmek istediğinize emin misiniz?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Sil</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="pagination">
                {{ $messages->links('pagination::simple-bootstrap-5') }}
            </div>
        @endif
    </div>
@endsection