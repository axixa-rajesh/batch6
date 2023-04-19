<?php
class DiseaseController extends Controller
{
    public $dis;
    public function __construct()
    {
        parent::__construct();
        check_login();
        $this->dis = $this->loadModel('disease');
    }
    public function index()
    {
        $data = $this->dis->all();

        $this->view->load("disease.index", compact('data'));
    }
    public function create()
    {
        $this->view->load("disease.create");
    }
    public function store()
    {
        $file="";
        if($_FILES['pics']['name']){
            $file=move($_FILES['pics']['tmp_name'], time()."_".$_FILES['pics']['name']);
        }
        $storeinfo = [
            'name' => request('name'),
            'prescription' => request(
                'prescription'
            ),
            'symptoms' => request('symptoms'),
            'pics'=>$file
        ];
        $this->dis->save($storeinfo);
        redirect('disease');

    }
    public function edit($id)
    {
        $info = $this->dis->find($id);
        //rint_r($info);
        $this->view->load('disease.edit', compact('info'));
    }
    public function update($id)
    {
        $storeinfo = [
            'name' => request('name'),
            'prescription' => request(
                'prescription'
            ),
            'symptoms' => request('symptoms')
        ];
        $this->dis->update($storeinfo, $id);
        redirect('disease');

    }
    public function destroy($id)
    {
        $this->dis->delete( $id);
        redirect('disease');

    }
}
