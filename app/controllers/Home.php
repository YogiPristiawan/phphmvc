<?php

class Home extends Controller
{


	protected $film;
	protected $genre;
	public function __construct()
	{
		$this->film = $this->model("Film");
		$this->genre = $this->model("Genre");
	}


	public function index()
	{
		$data['judul'] = 'Home';
		$data['film'] = $this->film->getAll();
		$data['genre'] = $this->genre->getAll();

		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}

	public function genre($genre_id)
	{
	}
}
