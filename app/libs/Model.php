<?php
class Model extends PDO
{
    protected $table, $key = 'id';
    public function __construct($tablename)
    {
        $con = new PDO("mysql:host=localhost;dbname=health", 'root', '');
        parent::__construct(DBPROVIDER . ":host=" . HOSTNAME . ";dbname=" . DB, USERNAME, PASSWORD);
        if (!$this->table) {
            $this->table = $tablename;
        }
    }
    public function save($data)
    {
        $keys = array_keys($data);
        $cols = implode(',', $keys);
        $lbs = ":" . implode(',:', $keys);
        // $lbs = implode(',',array_map(fn($val)=>":$val" ,$keys));
        $sql = "insert into $this->table($cols) values($lbs) ";
        $rs = $this->prepare($sql);
        $rs->execute($data);
        return $this->lastInsertId();
    }
    public function update($data, $id)
    {
        $coldetails = '';
        foreach ($data as $key => $value) {
            $coldetails .= "$key=:$key,";
        }
        $coldetails = substr($coldetails, 0, -1);
        $sql = "update $this->table set  $coldetails where $this->key=$id ";
        $rs = $this->prepare($sql);
        return $rs->execute($data);
    }
    public function all($cols = "*", $order = [])
    {
        if (!$cols) {
            $cols = "*";
        } else {
            if (is_array($cols)) {
                $cols = implode(',', $cols);
            }
        }
        $orders = $this->key;
        $orderby = 'asc';
        if ($order) {
            if (is_array($order)) {
                $orders = $order[0];
                $orderby = $order[1] ?? 'asc';
            } else {
                $orders = $order;
            }
        }
        $sql = "select $cols from $this->table order by $orders $orderby";
        $rs = $this->prepare($sql);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_ASSOC);
    }
    public function find($id, $cols = [])
    {
        if (!$cols) {
            $cols = "*";
        } else {
            if (is_array($cols)) {
                $cols = implode(',', $cols);
            }
        }
        $sql = "select $cols from $this->table where $this->key=$id";
        $rs = $this->prepare($sql);
        $rs->execute();
        return $rs->fetch(PDO::FETCH_ASSOC);
    }
    public function delete($id)
    {
        $sql = "delete from $this->table where $this->key=:id";
        $rs = $this->prepare($sql);
        return $rs->execute(compact('id'));
    }
}
