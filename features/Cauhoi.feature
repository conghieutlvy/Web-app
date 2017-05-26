Feature: Cauhoi_page
	I am on the cauhoi_page
	as a user
	I can see cauhoi_page
	
	Scenario: View
		Given I am on "http://thithulaixe.esy.es/cauhoi"
		Then I should see "Danh sách câu hỏi có trong đề thi"
