<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <form action="">
        <h1>BOOK FORM</h1>
        <div class="form-input">
            <label for="">Title</label>
            <input type="text" name="title" placeholder="Input Title">
        </div>
        <div class="form-input">
            <label for="">Author</label>
            <input type="text" name="author" placeholder="Input Author">
        </div>
        <div class="form-input">
            <label for="">Price</label>
            <input type="number" name="price" placeholder="Input Price">
        </div>
        <div class="form-input">
            <label for="">Date</label>
            <input type="date" name="date" placeholder="Input Date">
        </div>
        <div class="form-input">
            <label for="">Image</label>
            <input type="file" name="image" placeholder="Input Image">
        </div>
        <Button type="submit">Submit</Button>
    </form>
    
    @php
    $mahasiswa = array(
        array(
            "nama" => "Budi",
            "umur" => 18,
            "GPA" => 3.5
        ),
        array(
            "nama" => "Siti",
            "umur" => 19,
            "GPA" => 3.8
        ),
        array(
            "nama" => "Asep",
            "umur" => 20,
            "GPA" => 3.2
        ),
        array(
            "nama" => "Mira",
            "umur" => 21,
            "GPA" => 3.9
        )
    );

    @endphp

h1
<table>
    <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>GPA</th>
    </tr>

    @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['umur'] }}</td>
            <td>{{ $mhs['GPA'] }}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
</body>
</html>