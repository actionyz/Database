<?php
//���ݿ������ļ�
$host='localhost';//���ݿ������
$user='root';//���ݿ��û���
$password='111111';//���ݿ�����
$database='college2';//���ݿ���
$connect = mysqli_connect($host,$user,$password) or die ('Connect Error'.mysqli_connect_error());
mysqli_select_db($connect,$database) or die ('Select Error');
$username=$_POST['Username'];
$passwd=$_POST['Password'];
?>