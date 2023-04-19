<?php
class EmployeeController extends Controller
{
    public function index()
    {
        $empobj = $this->loadModel('Employee');
        print_r($empobj);
        $this->view->load("employee.index", []);
    }
    public function create()
    {
        echo "<div>This is create of Employee</div>";
    }
    public function store()
    {
        echo "<div>This is store of Employee</div>";
    }
    public function edit()
    {
        echo "<div>This is edit of Employee</div>";
    }
    public function update()
    {
        echo "<div>This is update of Employee</div>";
    }
    public function destroy()
    {
        echo "<div>This is delete of Employee</div>";
    }
}
