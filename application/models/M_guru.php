<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model
{
    function AddData($tabel, $data=array())
    {
        return $this->db->insert($tabel,$data);
    }

    function UpdateData($tabel,$fieldid,$fieldvalue,$data=array())
    {
       return $this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
    }

    function hapusData($tabel,$fieldid,$fieldvalue)
    {
       return $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }


    function GetDataUser($nik)
    {
        $query= $this->db->query("select * from users where nik=$nik");
        return $query->result();
    }

    function GetEmployee()
    {
        $query= $this->db->query("select * from employess");
        return $query->result();
    }

    function GetDataDoc($nik,$school_year_id)
    {
        $query= $this->db->query("select a.nama_jenis_doc,a.kd_jenis_doc,b.upload_doc,b.st_doc,b.kd_doc,b.note_doc from adm_jenis_doc a left join adm_doc b on a.kd_jenis_doc=b.kd_jenis_doc and b.nik=$nik and a.school_year_id=$school_year_id");
        return $query->result();
    }

    function GetDataEmpl()
    {
        return $query=$this->db->query("select * from employess inner join users on employess.nik=users.nik");
        
    }
    function GetDataEmpl_a($status)
    {
        return $this->db->query("select * from employess inner join users on employess.nik=users.nik and status_pendidik='$status'");
    }
    function GetDataEmpl_b($status)
    {
        return $this->db->query("select * from employess inner join users on employess.nik=users.nik and status_pns='$status'");
    }
    function GetDetailEmpl($id)
    {
        $query= $this->db->query("select * from employess inner join users on employess.nik=users.nik and employess.nik='$id'");
        return $query->row_array();
    }

    function GetDataStudents(){
        $this->db->select('*,students.name as student_name, class_rooms.name as class_name,class_rooms.id as class_id');
        $this->db->from('students');
        $this->db->join('class_rooms', 'class_rooms.id = students.class_room_id');
        return $this->db->get()->result();
    }

    function GetDataStudentClass(){
        $this->db->select('*,students.name as student_name, class_rooms.name as class_name,class_rooms.id as class_id');
        $this->db->from('students');
        $this->db->join('class_rooms', 'class_rooms.id = students.class_room_id');
        $this->db->group_by('class_name');
        return $this->db->get()->result();
    }
    function GetDataClass(){
        $this->db->select('*,class_rooms.name as class_name,class_rooms.id as class_id');
        $this->db->from('class_rooms');
        return $this->db->get()->result();
    }
    function GetDataUsers(){
        $this->db->select('*,users.nik as user_nik');
        $this->db->from('users');
        $this->db->join('employess', 'employess.nik = users.nik','left');
        return $this->db->get()->result();
    }
    function GetDataUsersNeed(){
        $this->db->select('*,users.nik as user_nik');
        $this->db->from('users');
        $this->db->join('employess', 'employess.nik = users.nik');
        return $this->db->get()->result();
    }
    function GetDataMon($school_year_id)
    {
        $query= $this->db->query("select a.nik,a.username,a.type,count(b.st_doc) as jumlah from users a left join adm_doc b on a.nik=b.nik and b.school_year_id=$school_year_id group by nik order by nik asc");
        return $query->result();
    }

    function GetDataMonAcc($school_year_id)
    {
        $query= $this->db->query("select a.nik,a.name,count(b.st_doc) as jumlah from users a left join adm_doc b on a.nik=b.nik and b.school_year_id=$school_year_id and b.st_doc=1 group by nik order by nik asc");
        return $query->result();
    }

    function GetDataMonBelumPeriksa($school_year_id)
    {
        $query= $this->db->query("select a.nik,a.name,count(b.st_doc) as jumlah from users a left join adm_doc b on a.nik=b.nik and b.school_year_id=$school_year_id and b.st_doc=0 group by nik order by nik asc");
        return $query->result();
    }

     function GetDataMonBelumPeriksaPerbaikan($school_year_id)
    {
        $query= $this->db->query("select a.nik,a.name,count(b.st_doc) as jumlah from users a left join adm_doc b on a.nik=b.nik and b.school_year_id=$school_year_id and b.st_doc=22 group by nik order by nik asc");
        return $query->result();
    }

    function GetDataMonPerbaikan($school_year_id)
    {
        $query= $this->db->query("select a.nik,a.name,count(b.st_doc) as jumlah from users a left join adm_doc b on a.nik=b.nik and b.school_year_id=$school_year_id and b.st_doc=2  group by nik order by nik asc");
        return $query->result();
    }

   function GetTotalJenisDoc($school_year_id)
   {
        $query= $this->db->query("SELECT count(kd_jenis_doc) as jumlah FROM adm_jenis_doc where school_year_id=$school_year_id");
        return $query->result();
   }

   function GetTotalGuru()
   {
     $sql=$this->db->query("select count(nik) as jumlah_nik from users where nik<>0 and nik<>7232832932");
     return $sql->result();
   }


   function GetTotalAcc($school_year_id)
   {
    $sql=$this->db->query("select count(kd_doc) as jumlah_acc from adm_doc where st_doc=1 and school_year_id=$school_year_id");
    return $sql->result();
   }
   function GetTotalPerbaikan($school_year_id)
   {
    $sql=$this->db->query("select count(kd_doc) as jumlah_perbaikan from adm_doc where st_doc=2 and school_year_id=$school_year_id");
    return $sql->result();
   }
   function GetTotalBelum($school_year_id)
   {
    $sql=$this->db->query("select count(kd_doc) as jumlah_belum from adm_doc where st_doc=22 or st_doc=0 and school_year_id=$school_year_id");
    return $sql->result();
   }


   function GetMengajar($nik,$school_year_id)
    {
      $this->db->select('*');
      $this->db->from('subject_teachers');
      $this->db->where('user_id', $nik);
      $this->db->where('school_year_id', $school_year_id);
      $query = $this->db->get();
      if($query -> num_rows() == 1){
        $row = $query->row(); 
      }

       
   $sql=$this->db->query("select a.id,b.name from subject_teachers a, lessons b where a.lesson_id=b.id and a.user_id=$nik and a.school_year_id=school_year_id");
    return $sql->result();
    }

    function GetDaftarKelas($subject_teachers_id)
    {
       
    $sql=$this->db->query("SELECT b.id,b.name,b.capacity FROM class_room_subject_teacher a LEFT OUTER JOIN class_rooms b on a.class_room_id=b.id and a.subject_teacher_id=$subject_teachers_id");
    return $sql->result();
    }
    
    function GetDataKelas(){
        return $this->db->get('class_rooms')->result();
    }
    function GetDaftarPelajaran(){
        return $this->db->get('lessons')->result();
    }
    function GetGuruMengajar(){
        $this->db->select('*,subject_teachers.id as subject_id');
        $this->db->from('subject_teachers');
        $this->db->join('users', 'users.id = subject_teachers.user_id');
        $this->db->join('lessons', 'lessons.id = subject_teachers.lesson_id');
        $mengajar=$this->db->get()->result();

        foreach($mengajar as $mj){
            $this->db->select('*,class_room_subject_teacher.id as cs_id');
            $this->db->from('class_room_subject_teacher');
            $this->db->join('class_rooms', 'class_rooms.id = class_room_subject_teacher.class_room_id');
            $this->db->where('class_room_subject_teacher.subject_teacher_id', $mj->id);
            $detail=$this->db->get()->result();
            $mj->detail=$detail;
        }

        return $mengajar;
    }
    function GetDataMengajar($id){
        $this->db->select('*,lessons.name as lesson_name,class_rooms.name as class_name');
        $this->db->from('subject_teachers');
        $this->db->join('users', 'users.id = subject_teachers.user_id');
        $this->db->join('lessons', 'lessons.id = subject_teachers.lesson_id');
        $this->db->join('class_room_subject_teacher', 'subject_teacher_id = subject_teachers.id');
        $this->db->join('class_rooms', 'class_rooms.id = class_room_subject_teacher.class_room_id');
        $this->db->where('subject_teachers.user_id', $id);
        return $this->db->get()->result();
    }

    function GetDataMengajarTerbaru(){
        $this->db->select('*,users.nik as nik_tampil');
        $this->db->from('users');
        $this->db->join('employess', 'employess.nik = users.nik');
        $this->db->join('adm_doc', 'adm_doc.nik = users.nik','left');
        $this->db->where('type','guru');
        $this->db->order_by('waktu_doc', 'DESC');
        $this->db->group_by('adm_doc.nik');
        return $this->db->get()->result();
    }

    function GetDaftarSiswa($subject_teachers_id)
    {
       
    $sql=$this->db->query("SELECT b.nis,b.name FROM class_rooms a , students b where a.id=b.class_room_id and a.id=$subject_teachers_id");
    return $sql->result();
    }

     function GetCekPertemuan($subject_teachers_id,$class_room_id)
    {
       
    $sql=$this->db->query("SELECT pert FROM `attendence` where subject_teacher_id=$subject_teachers_id and class_room_id=$class_room_id group by pert");
    return $sql->result();
    }


     function GetMonPertemuan($subject_teachers_id,$class_room_id)
    {
       
    $sql=$this->db->query("select a.nis,b.name,count(a.pert) as jumlah from attendence a INNER join students b on a.nis=b.nis and a.attendence=1 and a.subject_teacher_id=$subject_teachers_id and a.class_room_id=$class_room_id group by a.nis");
    return $sql->result();
    }


}