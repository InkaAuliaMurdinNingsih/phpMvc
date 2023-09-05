<?php
class Blog extends Controller
{
    public function index()
    {
        $data['judul'] = "Blog";
        $data['blog'] = $this->model("Blog_model")->getAllBlog();
        $this->view('templates/header',$data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Guru";
        $data['guru'] = $this->model("Blog_model")->getBlogById($id);
        $this->view('templates/header',$data);
        $this->view('blog/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Blog_model')->tambahData( $_POST) > 0){
            Flasher::setFlash1('berhasil', ' ditambahkan', 'success');
            header('Location: '. Base_URL .'/blog');
            exit;
        } else{
            flasher::setFlash1('gagal', 'ditambahkan', 'danger');
            header('location: '. Base_URL .'/blog');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Blog_model')->hapusDataGuru($id) > 0){
            flasher::setFlash1('berhasil', ' dihapus', 'success');
            header('location: ' . Base_URL .'/blog');
            exit;
        } else{
            Flasher::setFlash1('gagal', ' dihapus', 'danger');
            header('location:' . Base_URL . '/blog');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Blog_model')->getBlogById($_POST['id']));
    }
    public function ubah()
    {
        if( $this->model('Blog_model')->ubahDataGuru($_POST) > 0 ) {
        Flasher::setFlash('berhasil', ' diubah', 'success');
        header('Location: ' . Base_URL . '/blog');
        exit;
    } else {
        Flasher::setFlash('gagal', ' diubah', 'danger');
        header('Location: ' . Base_URL . '/blog');
        exit;
        } 
    }
}