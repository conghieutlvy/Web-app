Feature: Thingaunhien_page
	I am on home_page
	as a user
	I can begin a random test
	
	Scenario: Go to doExam_page
		Given I am on "http://thithulaixe.esy.es/"
		When I follow "dengaunhien"
		Then I should be on "http://thithulaixe.esy.es/doExam"
		And I should see "Bộ đề thi ngẫu nhiên"

	Scenario: Finish test
		Given I am on "http://thithulaixe.esy.es/doExam"
		When I follow "Nộp bài"
		Then I should be on "http://thithulaixe.esy.es/doExam"
		And I should see "Kết quả bài thi"