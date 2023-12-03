@extends('layouts.app', ['title' => 'Orders'])

@section('content')
    <h1>Orders</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nosaukums</th>
                <th>Apraksts</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <form method="post" action="#">
        @csrf
        <div class="mb-3">
            <label for="nameInput" class="form-label">Nosaukums</label>
            <input type="text" class="form-control" id="nameInput" name="name">
        </div>
        <div class="mb-3">
            <label for="descriptionInput" class="form-label">Apraksts</label>
            <input type="text" class="form-control" id="descriptionInput" name="description">
        </div>
        <div class="mb-3">
            <input type="submit" id="submitOrder" class="btn btn-primary" value="Saglabāt">
        </div>
    </form>


@endsection