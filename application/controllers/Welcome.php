<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->db->select('*,artist.name as artname,track.name as trname');
		$this->db->from('track');
		$this->db->join('artist', 'track.artist_id = artist.id');
//		$this->db->where('track.album_id', $_POST['track_id']);
		$query = $this->db->get();
//		print_r($query->result());
//		exit;

		$musice = $this->db->get('track')->result();
		$artist = $this->db->get('artist');
		$album = $this->db->get('album');

		

		$trackIsPlayin = $this->db->get_where('track', array('playing' => 1))->result();
		$this->load->view('welcome_message',array('musice'=>$query->result(),'artist'=>$artist,'album'=>$album,'trackIsPlayin'=>$trackIsPlayin));
	}
	public function getmusicfromalbum() {
//		echo $_POST['track_id'];
		if($_POST['track_id']) {
			$track = $this->db->get_where('track', array('album_id' => $_POST['track_id']));
			$tracks=$track->result();
//			$array = get_object_vars($tracks[0]);
//			$artist=$this->db->get_where('artist', array('id' == $array['artist_id']));
//			$artists=$artist->result();
//			$arrayartist=get_object_vars($artists[0]);
//			$data=array('tracks'=> array($tracks),
//				'artists'=>array($arrayartist)
//			);
			echo json_encode($tracks);
		}
	}
	public function getalbums() {
		$this->db->select('*,artist.name as artname,track.name as trname');
		$this->db->from('track');
		$this->db->join('artist', 'track.artist_id = artist.id');
//		$this->db->where('track.album_id', $_POST['track_id']);
		$query = $this->db->get();
		echo json_encode($query->result());
	}
	public function getalbfromart(){
		$albums = $this->db->get_where('album', array('artist_id' => $_POST['selected_art']));

		echo json_encode($albums->result());

	}
	public function getartwikipedia(){
		$artistinfo = $this->db->get_where('artist', array('id' => $_POST['selected_art']));
		echo json_encode($artistinfo->result());
	}
	public function getsimilerart(){
		$similirartist = $this->db->get_where('artist', array('role' => $_POST['selectrel']));
		echo json_encode($similirartist->result());
	}
	public function getplayingtracks(){
		$gettrackIsPlayin = $this->db->get_where('track', array('playing' => $_POST['playing']));
		echo json_encode($gettrackIsPlayin);
	}
	public function getmusicfromalbumsel() {
		if($_POST['track_id']) {
//			$track = $this->db->get_where('track', array('album_id' => $_POST['track_id']));
//			$seltrack=$track->result();
			$this->db->select('*,artist.name as artname,track.name as trname');
			$this->db->from('track');
			$this->db->join('artist', 'track.artist_id = artist.id');
			$this->db->where('track.album_id', $_POST['track_id']);
			$query = $this->db->get();
			echo json_encode($query->result());
		}
	}
	public function getwithplaylisttab(){
		if($_POST['dataPostItem']=='rate'){
			exit;
		}
		else {
			$post_item_result = $this->db->get_where('track', array($_POST['dataPostItem'] => date("Y-n-j")));
			$post_item_result = $post_item_result->result();
			echo json_encode($post_item_result);
		}
	}
	public function setrecentlyplaying(){

		$this->db->set('playing_date', date("Y-n-j"));
		$this->db->where('track_id', $_POST['track_id']);
		$this->db->update('track');
		echo json_encode(true);
	}
	public function draguploadimg(){
		$ds= DIRECTORY_SEPARATOR;  //1
		$storeFolder = '../../public/img';   //
		if (!empty($_FILES)) {
			$tempFile = $_FILES['file']['tmp_name']; //3
			$targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
			$targetFile =  $targetPath. $_FILES['file']['name'];  //5
			move_uploaded_file($tempFile,$targetFile); //6

		}
	}
	public function searchmusic(){
		$searchname=$_POST['searctext'];
//		$likemusic=array($this->db->like('track', $_POST['searctext'],'before')->result());
//		$likemusic=$this->db->select('*,artist.name as artname,track.name as trname')
//			->join('artist', 'track.artist_id = artist.id')
//			->where("name LIKE '%$searchname%'")->get();
		$this->db->select('*,artist.name as artname,track.name as trname');
		$this->db->from('track');
		$this->db->join('artist', 'track.artist_id = artist.id');
		$this->db->where("track.name LIKE '%$searchname%'");
		$likemusic = $this->db->get();
		echo json_encode($likemusic->result());
	}

}
