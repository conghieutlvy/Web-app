Feature: Thingaunhien_page
	I am on home_page
	as a user
	I can begin a random test
	
	Scenario: Go to doExam_page
		Given I am on the homepage
		When I follow "dengaunhien"
		Then the url should match "/doExam"
		And I should see "Bộ đề thi ngẫu nhiên"

	Scenario: Finish test
		Given I am on "/doExam"
		When I follow "Nộp bài"
		Then the url should match "/doExam"
		And I should see "Kết quả bài thi"