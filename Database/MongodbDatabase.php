<?php
require_once '../../vendor/autoload.php';

class MongodbDatabase {

    function __construct()
    {
        $this->db = ( new MongoDB\Client )->perpusdb;
    }

    public function fetchDataPenerbit()
    {
        
        return $this->db->Penerbit->find(
            ['buku'=>['$exists' => true]]
        );
    }

    public function getDataBookByISBN($isbn)
    {
        
        return $this->db->Penerbit->findOne( 
            ['buku.isbn'=> $isbn]
        );
    }
    
    public function insertNewBook($book = [])
    {
        if(empty($book)){
            return false;
        }

        $insert = $this->db->Penerbit->insertOne([
            'nama' => $book['penerbit'],
            'buku'=> [
                'isbn' => $book['isbn'],
                'judul' => $book['judul'],
                'penulis' => $book['penulis'],
                'kategori' => $book['kategori'],
            ] 
        ]);

        return 'Berhasil Masuk!';
    }

    public function updateBook($book = [])
    {
        if(empty($book)){
            return false;
        }

        $insert = $this->db->Penerbit->updateOne(
            ['buku.isbn' => $book['isbn']],
            ['$set' => [
                'nama' => $book['penerbit'],
                'buku'=> [
                    'isbn' => $book['isbn'],
                    'judul' => $book['judul'],
                    'penulis' => $book['penulis'],
                    'kategori' => $book['kategori'],
                ] 
            ]]
        );

        return 'Berhasil Update!';
    }

    public function deleteBook($id, $isbn)
    {

        $del = $this->db->Penerbit->updateOne(
            ['buku.isbn'=> $isbn],
            ['$unset' => ['buku'=>""]]
        );

    }
    

}

// $client = new MongoDB\Client;
// $perpusdb = $client->perpusdb;
// $penerbitCollection = $perpusdb->Penerbit;

// $temp = $penerbitCollection->findOne(
//     ['nama' => 'PT Elex Media Komputindo']
// );

// var_dump($temp->buku->kategori);

?>