<?php
class Home extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->library('session');
		$this->load->model('Mymodel');
	} 
	function index(){
        $data['categories'] = $this->Mymodel->get_parent_categories(); 
        $categories = $data['categories'];	
        $availableAlphabet = array(); 
        if ($categories) { 
            foreach ($categories as $category) { 
                $availableAlphabet[] = $category['name'][0]; 
            } 
        } 
        $availableAlphabet = array_unique($availableAlphabet); 
        $result = $this->db->query("SELECT SUBSTRING(name,1,1) AS alpha, categories.* FROM categories WHERE inactive = 0 ORDER BY name ASC")->result_array(); 
        $grouped_category = array(); 
        foreach ($result as $item) { 
            $grouped_category[$item['alpha']][] = $item; 
        }
		$data['product_alphabet'] = $grouped_category;
    $data['random_product_list'] = $this->Mymodel->get_random_product();
		$data['random_product_list_1'] = $this->Mymodel->get_random_product_1();
		$data['random_product_list_2'] = $this->Mymodel->get_random_product_2();
    $data['all_categories'] = $this->Mymodel->get_all_categories();
    $data['product_category'] = $this->Mymodel->product_by_category();
		$data['cat_data_home']	 = $this->Mymodel->get_random_home_data();
		$data['footer_cat']		= $this->Mymodel->get_footer_cat();
		$data['footer_prod']	 = $this->Mymodel->get_footer_prod();
		$this->load->view('header', $data);
		$this->load->view('index');
		$this->load->view('footer');
    }
    function all_products(){
    $data['categories']		 = $this->Mymodel->get_parent_categories();
    $data['all_categories'] = $this->Mymodel->get_all_categories();
    $data['product_category'] = $this->Mymodel->product_by_category();
		$data['cat_data_home']	 = $this->Mymodel->get_random_home_data();
		$data['footer_cat']		= $this->Mymodel->get_footer_cat();
		$data['footer_prod']	 = $this->Mymodel->get_footer_prod();
		$data['random_product_list'] = $this->Mymodel->get_random_product();
		$data['random_product_list_1'] = $this->Mymodel->get_random_product_1();
		$data['random_product_list_2'] = $this->Mymodel->get_random_product_2();
		$this->load->view('header', $data);
		$this->load->view('all_product');
		$this->load->view('footer');
    }
    function catalog(){
        $page_url = $this->uri->segment_array();
        $sku = end($page_url);
        $data['product']		 = $this->Mymodel->catalog_by_sku($sku);
        $data['categories']		 = $this->Mymodel->get_parent_categories();
        $data['all_categories'] = $this->Mymodel->get_all_categories();
        $data['product_category'] = $this->Mymodel->product_by_category();
		$data['cat_data_home']	 = $this->Mymodel->get_random_home_data();
		$data['footer_cat']		= $this->Mymodel->get_footer_cat();
		$data['footer_prod']	 = $this->Mymodel->get_footer_prod();
		$data['random_product_list'] = $this->Mymodel->get_random_product();
		$data['random_product_list_1'] = $this->Mymodel->get_random_product_1();
        $data['random_product_list_2'] = $this->Mymodel->get_random_product_2();
        // $data['title'] = "Labotronics | Lab Equipment | Scientific Instruments";
		$this->load->view('header', $data);
		$this->load->view('generate-catalog',$data);
		$this->load->view('footer',$data);
    }

	function routes(){
		$page_url = $this->uri->segment_array();
        $last = end($page_url);
        $count = count($page_url);
		$msg = $this->Mymodel->check_routes($last);
		if($msg == 1){
			return $this->products_description($page_url);
		}
		else
		{
			return $this->catrgories_products_list($page_url);
        }
    }
    function page_not_found(){
//        $data['categories']		 = $this->Mymodel->get_parent_categories();
//        $data['all_categories'] = $this->Mymodel->get_all_categories();
//        $data['product_category'] = $this->Mymodel->product_by_category();
//		$data['cat_data_home']	 = $this->Mymodel->get_random_home_data();
//		$data['footer_cat']		= $this->Mymodel->get_footer_cat();
//		$data['footer_prod']	 = $this->Mymodel->get_footer_prod();
//		$data['random_product_list'] = $this->Mymodel->get_random_product();
//		$data['random_product_list_1'] = $this->Mymodel->get_random_product_1();
//		$data['random_product_list_2'] = $this->Mymodel->get_random_product_2();
//        $this->load->view('header',$data);
//        $this->load->view('404',$data);
        redirect('');
        //$this->load->view('footer',$data);
    }
	function catrgories_products_list($page_url){
		$get_page_url = $this->uri->segment_array();
		$link_count = count($get_page_url);
		if($link_count == 1){
		$page_url = $get_page_url[1];
		$id = $this->Mymodel->get_cat_id($page_url);
		$main_id = $id[0]['id'];
		$data['cat_data'] = $id[0];
		$sub_cat_id = $this->Mymodel->get_cat_products_list($main_id);
        $data['sub_cat_list'] = $sub_cat_id;
		$data['products_list'] = $this->Mymodel->all_cat_products_list($main_id);
	}
	if($link_count == 2){
		$page_url = $get_page_url[1].'/'.$get_page_url[2];
		$id = $this->Mymodel->get_cat_id($page_url);
		$main_id = $id[0]['id'];
		$data['cat_data'] = $id[0];
		$data['sub_cat_list'] = $this->Mymodel->get_cat_products_list($main_id);
		$data['products_list'] = $this->Mymodel->all_sub_cat_products_list($main_id);
	}
	if($link_count == 3){
		$page_url =  $get_page_url[1].'/'.$get_page_url[2].'/'.$get_page_url[3];
        $id = $this->Mymodel->get_cat_id($page_url);
        // echo '<pre>';
        // print_r($id); die;
		$main_id = $id[0]['id'];
		$data['cat_data'] = $id[0];
		$data['sub_cat_list'] = $this->Mymodel->get_cat_products_list($main_id);
		$data['products_list'] = $this->Mymodel->all_sub_cat_products_list($main_id);
	}

   //header start
   $data['product_name'] = $this->Mymodel->product_name($main_id);
   $data['categories'] = $this->Mymodel->get_parent_categories();
   $data['all_categories'] = $this->Mymodel->get_all_categories();
   $data['product_category'] = $this->Mymodel->product_by_category();
   $data['cat_data_home']	 = $this->Mymodel->get_random_home_data();
   $data['footer_cat']		= $this->Mymodel->get_footer_cat();
   $data['footer_prod']	 = $this->Mymodel->get_footer_prod();
   $data['all_categories'] = $this->Mymodel->get_all_categories();
   $data['product_category'] = $this->Mymodel->product_by_category();
   $data['title'] = $this->uri->segment_array();
   $data['meta'] = $data['products_list'][0]['description'];
   $data['keywords'] = $data['products_list'][0]['head_title'];

   if(empty($main_id)){
    return $this->page_not_found();
   }
   else{
   // header end
   if(!empty($data['sub_cat_list'])){
       $this->sub_cat($data);
   }
   else{ 
   $data['breadcrumb'] = $this->uri->segment_array();
   $data['categories'] = $this->Mymodel->get_parent_categories();
   $data['footer_cat'] = $this->Mymodel->get_footer_cat();
   $data['footer_prod'] = $this->Mymodel->get_footer_prod();
   $this->load->view('header',$data);
   $this->load->view('categorieslist');
   $this->load->view('footer');
     }
    }
}
function sub_cat($data){
    $data['all_categories'] = $this->Mymodel->get_all_categories();
    $data['product_category'] = $this->Mymodel->product_by_category();
    $data['cat_data_home']	 = $this->Mymodel->get_random_home_data();
    $data['footer_cat']		= $this->Mymodel->get_footer_cat();
    $data['footer_prod']	 = $this->Mymodel->get_footer_prod();
    $seg = $this->uri->segment_array();
    $count_seg = count($seg);
    if($count_seg == 1){
        $this->load->view('header',$data);
        $this->load->view('sub_cat');
        $this->load->view('footer');
    } 
    else{   
    $this->load->view('header',$data);
    $this->load->view('productcategories');
    $this->load->view('footer');
    }
}
  function products_description($page_url){
    $data['all_categories'] = $this->Mymodel->get_all_categories();
    $data['product_category'] = $this->Mymodel->product_by_category();
    $data['cat_data_home']	 = $this->Mymodel->get_random_home_data();
    $data['footer_cat']		= $this->Mymodel->get_footer_cat();
    $data['footer_prod']	 = $this->Mymodel->get_footer_prod();
    $product_sku = end($page_url);
    $data['breadcrumb'] = $page_url;

    $data['products_list'] = $this->Mymodel->products_list_data($product_sku);
    $product_cat_id = $data['products_list']['category_id'];
    $data['related_product'] = $this->Mymodel->get_related_products($product_cat_id);
    //header start

    $data['title'] = $this->uri->segment_array();
    $data['meta'] = $data['products_list']['description'];
    $data['keywords'] = $data['products_list']['head_title'];

    // header end
    $data['all_categories'] = $this->Mymodel->get_all_categories();
    $data['product_category'] = $this->Mymodel->product_by_category();  
    $data['categories'] = $this->Mymodel->get_parent_categories();
    $data['footer_cat'] = $this->Mymodel->get_footer_cat();
    $data['footer_prod'] = $this->Mymodel->get_footer_prod();
    $this->load->view('header',$data);
    $this->load->view('product');
	$this->load->view('footer');
  }

    function get_subcat(){
      $id = $this->input->post('id');
      $res['sub_list'] = $this->Mymodel->get_sub_cat_list($id);
      $this->load->view('sub_cat_view', $res);
      $this->load->view('footer');
    }

  function register(){

    //header data
    $data['categories'] = $this->Mymodel->get_parent_categories();
    $data['categories'] = $this->Mymodel->get_parent_categories();
    $data['footer_cat'] = $this->Mymodel->get_footer_cat();
    $data['footer_prod'] = $this->Mymodel->get_footer_prod();
    $this->load->view('header',$data);
    $this->load->view('register');
	$this->load->view('footer');
  }

  function login(){
    $data['categories'] = $this->Mymodel->get_parent_categories();
    $data['categories'] = $this->Mymodel->get_parent_categories();
    $data['footer_cat'] = $this->Mymodel->get_footer_cat();
    $data['footer_prod'] = $this->Mymodel->get_footer_prod();
    $this->load->view('header',$data);
    $this->load->view('login');
    $this->load->view('footer');
  }

  function search_products(){
    $data['categories']		 = $this->Mymodel->get_parent_categories();
    $data['all_categories'] = $this->Mymodel->get_all_categories();
    $data['product_category'] = $this->Mymodel->product_by_category();
    $data['cat_data_home']	 = $this->Mymodel->get_random_home_data();
    $data['footer_cat']		= $this->Mymodel->get_footer_cat();
    $data['footer_prod']	 = $this->Mymodel->get_footer_prod();
      $res['page_url'] = $this->uri->segment_array();
      $user_input = $this->input->get('search');
      $product = $this->Mymodel->search_product_by_key($user_input);
      $category = $this->Mymodel->search_category_by_key($user_input);
      if($product){
        $data['searched_products'] = $product; 
      }
      if($category){
        $data['searched_category'] = $category; 
      }
      $data['search_key'] = $user_input;
      $this->load->view('header', $data);
      $this->load->view('search_products');
      $this->load->view('footer');
    }

  function about_us(){
    $data['all_categories'] = $this->Mymodel->get_all_categories();
    $data['product_category'] = $this->Mymodel->product_by_category();
    $data['cat_data_home']	 = $this->Mymodel->get_random_home_data();
    $data['footer_cat']		= $this->Mymodel->get_footer_cat();
    $data['footer_prod']	 = $this->Mymodel->get_footer_prod();
    $data['categories'] = $this->Mymodel->get_parent_categories();

    $data['footer_cat'] = $this->Mymodel->get_footer_cat();

    $data['footer_prod'] = $this->Mymodel->get_footer_prod();

    $this->load->view('header',$data);

    $this->load->view('aboutus');

  }

  function contact_us(){
    $data['all_categories'] = $this->Mymodel->get_all_categories();
    $data['product_category'] = $this->Mymodel->product_by_category();
    $data['cat_data_home']	 = $this->Mymodel->get_random_home_data();
    $data['footer_cat']		= $this->Mymodel->get_footer_cat();
    $data['footer_prod']	 = $this->Mymodel->get_footer_prod();
    $data['categories'] = $this->Mymodel->get_parent_categories();

    $data['footer_cat'] = $this->Mymodel->get_footer_cat();

    $data['footer_prod'] = $this->Mymodel->get_footer_prod();

    $this->load->view('header',$data);

    $this->load->view('contactus');

  }

  function mypdf(){

    $this->load->library('pdf');

    $this->pdf->load_view('mypdf');

    $this->pdf->render();

    $this->pdf->stream("welcome.pdf");

}

function send_enquiry(){

    $this->load->library('email');

    $name = $this->input->post('name');

    $number = $this->input->post('mobile');

    $email = $this->input->post('email');

    $message = $this->input->post('message');

    $location = $this->input->post('location');

    $msg_body  ='<style type="text/css">

                </style>

                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="all">

                <div class="table-responsive">

                    <h1 style="text-align:center;">Quotation Request From <a style="color:#007f96;" href="www.laboquest.com">labotronics.com</a></h1>

                    <br>

                    <table class="table ">

                      <tr>

                          <td>

                              <h3><b>Email : </b><a style="color:#007f96;" href="mailto:'.$product.'">' . $product . '</a></h3>

                          </td>

                      </tr>

                        <tr>

                            <td>

                                <h3><b>Name : </b>' . $name . '</h3>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h3><b>Email : </b><a style="color:#007f96;" href="mailto:'.$email.'">' . $email . '</a></h3>

                            </td>

                        </tr>





                        <tr>

                            <td>

                                <h3>

                                    <b>Location : <span style="color:green;">'.$location.'</span></b>

                                </h3>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h3><b>Subject : </b>' . $subject . '</h3>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <h3><b>Message : </b>' . $message . '</h3>

                            </td>

                        </tr>

                    </table>

                </div>  ';

    $headSubject = 'Product Quote - www.labotronics.com';

    $to = 'info@labotronics.com';

    $cc = 'info@pcdex.com';

    $from = $email;

    $headers = "MIME-Version: 1.0" . "\r\n";

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers

    $headers .= 'From:' . $from . "\r\n";

    $headers .= 'Cc:' . $cc . "\r\n";

    if(mail($to,$headSubject,$msg_body,$headers)){

        $data['sent_fare_quote'] = 'Thank you for contacting us, we will get back to you soon';

    }else {

        $data['sent_fare_quote_err'] = 'Something went wrong, please try again!';

    }

    $this->session->set_flashdata('suc_send', 1);

    redirect('');

  }





  function send_quote(){

      $this->load->library('email');

      $product = $this->input->post('product');

      $name = $this->input->post('name');

      $email = $this->input->post('email');

      $subject = $this->input->post('subject');

      $message = $this->input->post('message');

      $location = $this->input->post('location');

      $msg_body  ='<style type="text/css">

                  </style>

                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="all">

                  <div class="table-responsive">

                      <h1 style="text-align:center;">Quotation Request From <a style="color:#007f96;" href="www.laboquest.com">labotronics.com</a></h1>

                      <br>

                      <table class="table ">

                        <tr>

                            <td>

                                <h3><b>Email : </b><a style="color:#007f96;" href="mailto:'.$product.'">' . $product . '</a></h3>

                            </td>

                        </tr>

                          <tr>

                              <td>

                                  <h3><b>Name : </b>' . $name . '</h3>

                              </td>

                          </tr>

                          <tr>

                              <td>

                                  <h3><b>Email : </b><a style="color:#007f96;" href="mailto:'.$email.'">' . $email . '</a></h3>

                              </td>

                          </tr>





                          <tr>

                              <td>

                                  <h3>

                                      <b>Location : <span style="color:green;">'.$location.'</span></b>

                                  </h3>

                              </td>

                          </tr>

                          <tr>

                              <td>

                                  <h3><b>Subject : </b>' . $subject . '</h3>

                              </td>

                          </tr>

                          <tr>

                              <td>

                                  <h3><b>Message : </b>' . $message . '</h3>

                              </td>

                          </tr>

                      </table>

                  </div>  ';

      $headSubject = 'Product Quote - www.labotronics.com';

      $to = 'info@labotronics.com';

      $cc = 'info@pcdex.com';

      $from = $email;

      $headers = "MIME-Version: 1.0" . "\r\n";

      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      // More headers

      $headers .= 'From:' . $from . "\r\n";

      $headers .= 'Cc:' . $cc . "\r\n";

      if(mail($to,$headSubject,$msg_body,$headers)){

          $data['sent_fare_quote'] = 'Thank you for contacting us, we will get back to you soon';

      }else {

          $data['sent_fare_quote_err'] = 'Something went wrong, please try again!';

      }

      $this->session->set_flashdata('suc_send', 1);

      redirect('');

    }





    function buildTree($elements = array(), $parentId = 0)

	{

        $branch = array();

        foreach ($elements as $element) {

            if ($element['parent_id'] == $parentId) {

                $children = $this->buildTree($elements, $element['id']);

             if ($children) {

                    $element['children'] = $children;

                }

                $branch[] = $element;

            }

        }

        return $branch;

    } 



    

	function Catalogs(){

		$categories	 = $this->Mymodel->get_parent_categories();

		$footer_cat	 = $this->Mymodel->get_footer_cat();

		$footer_prod	 = $this->Mymodel->get_footer_prod();
        $all_categories = $this->Mymodel->get_all_categories();
        $product_category = $this->Mymodel->product_by_category();
		// $this->load->view('header', $data);

        // $this->load->view('catalog');

        $all_categories = $this->Mymodel->retrieve('categories', '*',

        array('where' => array('inactive' => 0)),

        array('orderby' => array('SUBSTR(name FROM 1 FOR 1),CAST(SUBSTR(name FROM 2) AS UNSIGNED)')));

    $session_categories = $this->buildTree($all_categories);

    foreach ($session_categories as $key => $parent)

    {

        if (isset($parent['children']))

        {

            foreach ($parent['children'] as $id => $child){

                $get_products = $this->Mymodel->retrieve('products', '*', array('where' => array('category_id' => $child['id'])));

                if (!empty($get_products[0]['catalog_url'])) 

                {

                    $catalog_url = $get_products[0]['catalog_url'];

                }

                else

                {

                    $catalog_url = "";

                }

                $session_categories[$key]['children'][$id]['catalog_url'] = $catalog_url;

            }

        }

        else

        {

            $get_products = $this->Mymodel->retrieve('products', '*', array('where' => array('category_id' => $parent['id'])));

            if (!empty($get_products[0]['catalog_url']))

            {

                $catalog_url = $get_products[0]['catalog_url'];

            }

            else

            {

                $catalog_url = "";

            }

            $session_categories[$key]['catalog_url'] = $catalog_url;

        }

    }

    $main_cat = $this->Mymodel->get_main_categories();

    $rand_prod = $this->Mymodel->get_random_products();

    $title = "Catalogs | Labonics";

    $description = "Labonics offers a wide range of innovative Lab Equipment & Analytical Instruments for numerous applications in R&D, Quality control & Testing Laboratory";

    $keyword = str_replace('|',',',$title);

    $this->load->view('catalog', array('product_category' => $product_category , 'all_categories' => $all_categories , 'footer_prod' => $footer_prod , 'footer_cat' => $footer_cat , 'categories' => $categories, 'session_categories' => $session_categories , 'main_cat' => $main_cat, 'title' => $title, 'description' => $description, 'keyword' => $keyword, 'rand_prod' => $rand_prod));

    }

    















	public function compare() {

			$ids = '';

			if ($this->input->get('product_id')) {

					$ids = explode(',', $this->input->get('product_id'));

			}

	// print_r($ids);

			$results = $this->db->where_in('id', $ids)

					->order_by('name')

					->group_by('id')

					->get('products')

					->result_array();

			$keys = array();

			$uni = array();

			foreach ($results as $row) {

					$spec = json_decode($row['specifications'], true);

					foreach ($spec as $key => $value) {

							if (!in_array($key, $uni)) {

									$uni[] = $key;

							}

					}

			}

			foreach ($results as $row) {

					$spec = json_decode($row['specifications'], true);

					foreach ($uni as $k) {

							if (!isset($spec[$k])) {

									$keys[$k]['child'][] = "&mdash;";

							} else {

									$keys[$k]['child'][] = $spec[$k];

							}

					}



			}

			// echo '<pre>';

			// print_r ($keys);

			// Print_r ($results);

			// $this->load->title('Products Comparision | Lab Equipment');

			$data['categories'] = $this->Mymodel->get_parent_categories();

			$data['categories'] = $this->Mymodel->get_parent_categories();

			$data['footer_cat'] = $this->Mymodel->get_footer_cat();

			$data['footer_prod'] = $this->Mymodel->get_footer_prod();

			$this->load->view('header',$data);

			$this->load->view('compare',array('keys' => $keys, 'products' => $results));

			 $this->load->view('footer');

	}

}

?>

