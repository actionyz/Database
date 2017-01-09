select studentid,studentname from student and 2 < count(select score from sc where sc.studentid = student.studentid and score < 60)

1
select majorname,sex,count(*) from student where majorname = `计算机` or  `网工` group by majorname,sex having count(*) > 1 order by 1
2
select studentid,count(score) x from sc where score < 60 group  by studentid having count(score) > 2 order by x desc

select studentid,count(score) 
from sc x where studentid 
in 
(select studentid 
from sc y where score < 60 
group by studentid 
having count(*) >= 2) 
and score < 60
group by studentid 
order by 2
3
select age,count(*) x from student where majorname = 'qs' group by age order by 2
4
select studentid,studentname from student where studentid 
in 
(select studentid from sc
 group by studentid 
 having avg(score) >= 85 and min(score) >=75)
5
select studentname,courseid,score 
from student x left outer join sc y
on (x.studentid = y.studentif)              
6
select studentid,studentname from student x where majorname = (select majorname from student y where studentname = 'ji')
7
select studentid,studentname 
from student where studentid
not in (select studentid from sc where courseid = 1)

select studentid,studentname 
from student x where studentid
and not exists(select * from sc where courseid = 1 and sc.studentid = x.studentid)
8
select  studentid from student x where 
exists (select * from sc y where y.studentid = x.studentid and courseid = 1)
and
exists (select * from sc y where y.studentid = x.studentid and courseid = 2)
9
select   distinct studentid from sc x where 
exists (select * from sc y where y.studentid = x.studentid and courseid = 1)
and
not exists (select * from sc y where y.studentid = x.studentid and courseid = 2)
10
UPDATE  `sc`  SET score = score*1.1 where courseid = 2
11


select age,count(*) from student where majorname = `网工` 
group by age order by 2

select studentid,studentname from studentid in (
select studentid from sc x where score < (select min(score) from sc y where x.studentid = y.studentid ) and score >(select avg(score) from sc y where x.studentid = y.studentid)
)



select studentname from student where studentid in (select studentid from sc x where notexist(select * from sc y where courseid = c1 and x.studentid = y.studentid))

12 
DELETE FROM `sc` WHERE studentid in (select studentid from student where majorname = `网工`) 
select FROM `sc` WHERE studentid in (select studentid from student where majorname = 'qs') 



1
