<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('index.html.html');
		
	}

	public function populer()
	{
		$data=[
			'title' => 'Populer',
			'content' => file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key=1be36938cb01ff4e4c99593db3a3d4db&language=en-US&page=1'),
		];
		$this->load->view('template/header');
		$this->load->view('popular',$data);
		$this->load->view('template/footer');
	}
	public function upcoming()
	{
		$data=[
			'title' => 'Upcoming',
			'content' => file_get_contents('https://api.themoviedb.org/3/movie/upcoming?api_key=1be36938cb01ff4e4c99593db3a3d4db&language=en-US&page=1'),
		];
		$this->load->view('template/header');
		$this->load->view('upcoming',$data);
		$this->load->view('template/footer');	
	}
	public function toprated()
	{
		$data=[
			'title' => 'Top Rated',
			'content' => file_get_contents('https://api.themoviedb.org/3/movie/top_rated?api_key=1be36938cb01ff4e4c99593db3a3d4db&language=en-US&page=1'),
		];
		$this->load->view('template/header');
		$this->load->view('toprated',$data);
		$this->load->view('template/footer');	
	}

	public function nowplaying()
	{
		$data=[
			'title' => 'Now Playing',
			'content' => file_get_contents('https://api.themoviedb.org/3/movie/now_playing?api_key=1be36938cb01ff4e4c99593db3a3d4db&language=en-US&page=1'),
		];
		$this->load->view('template/header');
		$this->load->view('nowplaying',$data);
		$this->load->view('template/footer');	
	}

	public function detail($id)
	{
		$data=[
			'link' => 'https://api.themoviedb.org/3/movie/'.$id.'?api_key=ca1090203b8f814643a2d46047dfcaff',
		];
		$this->load->view('template/header');
		$this->load->view('detail',$data);
		$this->load->view('template/footer');	
	}
	
}
