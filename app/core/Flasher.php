<?php

class Flasher {
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash(){
        if(isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-' .$_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                    Data siswa <strong>' . $_SESSION['flash']['pesan'] . '</strong>' .$_SESSION['flash']['aksi'] .'
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['flash']);
        }
    }
    public static function setFlash1($pesan, $aksi, $tipe)
    {
        $_SESSION['flashh'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flashh(){
        if(isset($_SESSION['flashh']) ) {
            echo '<div class="alert alert-' .$_SESSION['flashh']['tipe'] . ' alert-dismissible fade show" role="alert">
                    Data Guru <strong>' . $_SESSION['flashh']['pesan'] . '</strong>' .$_SESSION['flashh']['aksi'] .'
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['flashh']);
        }
    }
}
?>