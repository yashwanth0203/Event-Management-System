"SELECT COUNT(*) as count 
FROM venue  ,users, caterers, staff
WHERE venue.venue_id = '$venue_id'
AND users.user_id = '$user_id'
AND staff.staff_id = '$staff_id'
AND caterers.caterer_id = '$caterer_id'

"