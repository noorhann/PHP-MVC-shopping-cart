<?php
session_start();

class session
{

    protected $bucket;

    public function __constructor($bucket = 'cart')
    {
        if(!isset($_SESSION[$bucket]))
        {
            $_SESSION[$bucket]=[];
        }
        $this->bucket =$bucket ;
    }

    public function get($id)
    {
        if(!$this->exists($id))
        {
            return NULL;
        }
        return $_SESSION[$this->bucket][$id];

    } 

    public function set($id , $value)
    {
        $_SESSION[$this->bucket][$id]=$value;
    }

    public function all()
    {
        return $_SESSION[$this->bucket];
    }

    public function exists($id)
    {
        return  isset($_SESSION[$this->bucket][$id]);
    }

    public function unset_cart($id)
    {
        if($this->exists($id))
        {
            unset($_SESSION[$this->bucket][$id]);
        }
    }

    public function clear()
    {
        unset($_SESSION[$this->bucket]);
    }

    public function count()
    {
        return count($this->all());
    }
}
?>