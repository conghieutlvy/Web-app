Feature: Thitheobode_page
	I am on home_page
	as a user
	I can begin a form test

	Scenario: Go to chooseexam_page
		Given I am on the homepage
		When I follow "bode"
		Then the url should match "/chooseexam"
	
	Scenario: Go to doExam_page
		Given I am on "/chooseexam"
		When I follow "1"
		Then the url should match "/doExam"
		And I should see "Bộ đề thi số 1"

	Scenario: Finish test
		Given I am on "/doExam"
		When I follow "Nộp bài"
		Then the url should match "/doExam"
		And I should see "Kết quả bài thi"