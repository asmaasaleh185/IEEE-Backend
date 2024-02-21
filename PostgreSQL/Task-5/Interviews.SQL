with total_submssion as(
    Select coll.contest_id, 
    sum(s.total_submissions) as t_sub, 
    sum(s.total_accepted_submissions) as t_acc_sub
    from Colleges as coll
    inner join Challenges as chall on coll.college_id = chall.college_id
    inner join Submission_Stats as s on s.challenge_id = chall.challenge_id
    group by coll.contest_id
),
total_views as(
    Select coll.contest_id, 
    sum(v.total_views) as t_views, 
    sum(v.total_unique_views) as t_uniq_views
    from Colleges as coll
    inner join Challenges as chall on coll.college_id = chall.college_id
    inner join View_Stats as v on v.challenge_id = chall.challenge_id
    group by coll.contest_id
)
Select c.contest_id, c.hacker_id, c.name, ts.t_sub, ts.t_acc_sub, tv.t_views, tv.t_uniq_views
from Contests as c
inner join total_submssion as ts on c.contest_id = ts.contest_id
inner join total_views as tv on c.contest_id = tv.contest_id
where ts.t_sub > 0
or ts.t_acc_sub > 0
or tv.t_views > 0
or tv.t_uniq_views > 0
order by c.contest_id;