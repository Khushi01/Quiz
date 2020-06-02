

<!DOCTYPE html>
<html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>| Online Quiz System |</title>
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel="shortcut icon" type="image/png" href="image/logo.png" />
        <style type="text/css">
< quiz>
  < title>Java Quiz (2015/01/18)< /title>
  < totalquizquestions>10< /totalquizquestions>
  < quizduration>2< /quizduration>
    < questions>

      < question>
        < quizquestion>Which is the correct syntax ?< /quizquestion>
        < answer> public class ABC extends QWE extends Student< /answer>
        < answer> int i="A";< /answer>
        < answer>String s="Hello";< /answer>
        < answer> private class ABC< /answer>
        < correct>2< /correct>
      < /question>

      < question>
        < quizquestion> Which of the following a is not a keyword in Java ?< /quizquestion>
        < answer>class< /answer>
        < answer>interface< /answer>
        < answer>extends< /answer>
        < answer>abstraction< /answer>
        < correct>3< /correct>
      < /question>

      < question>
        < quizquestion>What is true about Java ?< /quizquestion>
        < answer>Java is platform specific< /answer>
        < answer>Java does not support multiple inheritance< /answer>
        < answer>Java does not run on Linux and Mac< /answer>
        < answer>Java is not a multi-threaded language < /answer>
        < correct>1< /correct>
      < /question>

      < question>
        < quizquestion>Which of the following is an interface ?< /quizquestion>
        < answer>Thread< /answer>
        < answer>Runnable< /answer>
        < answer>Date< /answer>
        < answer>Calendar< /answer>
        < correct>1< /correct>
      < /question>	

	  < question>
        < quizquestion>Which company released Java Version 8 ?< /quizquestion>
        < answer>Sun< /answer>
        < answer>Oracle< /answer>
        < answer>Adobe< /answer>
        < answer>Google< /answer>
        < correct>1< /correct>
      < /question>

     < question>
        < quizquestion>Java comes under which category of languages ?< /quizquestion>
        < answer>First Generation Languages< /answer>
        < answer>Second Generation Languages< /answer>
        < answer>Third Generation Languages< /answer>
        < answer>Fourth Generation Languages< /answer>
        < correct>2< /correct>
      < /question>

      < question>
        < quizquestion>Which is the default package that is automatically visible to your program ?< /quizquestion>
        < answer>java.net< /answer>
        < answer>javax.swing< /answer>
        < answer>java.io< /answer>
        < answer>java.lang< /answer>
        < correct>3< /correct>
      < /question>	 

     < question>
        < quizquestion>Which entry in WEB-INF is used to map a servlet ?< /quizquestion>
        < answer>servlet-mapping< /answer>
        < answer>servlet-registration< /answer>
        < answer>servlet-entry< /answer>
        < answer>servlet-attachment< /answer>
        < correct>0< /correct>
      < /question>	

     < question>
        < quizquestion>What is the length of Java datatype int ?< /quizquestion>
        < answer>32 bit< /answer>
        < answer>16 bit< /answer>
        < answer>64 bit< /answer>
        < answer>Runtime specific< /answer>
        < correct>0< /correct>
      < /question>	

     < question>
        < quizquestion>What is the default value of Java datatype boolean?< /quizquestion>
        < answer>true< /answer>
        < answer>false< /answer>
        < answer>1< /answer>
        < answer>0< /answer>
        < correct>1< /correct>
      < /question>	 	   

    < /questions>
< /quiz>



request.getSession().setAttribute("totalNumberOfQuizQuestions",document.getElementsByTagName("totalQuizQuestions").item(0).getTextContent());
				request.getSession().setAttribute("quizDuration",document.getElementsByTagName("quizDuration").item(0).getTextContent());
				request.getSession().setAttribute("min",document.getElementsByTagName("quizDuration").item(0).getTextContent());
				request.getSession().setAttribute("sec",0);


< script language ="javascript" >
        var tim;       
        var min = '${sessionScope.min}';
        var sec = '${sessionScope.sec}';
        var f = new Date();

        function customSubmit(someValue){  
        	 document.questionForm.minute.value = min;   
        	 document.questionForm.second.value = sec; 
        	 document.questionForm.submit();  
        	 }  

        function examTimer() {
            if (parseInt(sec) >0) {

			    document.getElementById("showtime").innerHTML = "Time Remaining :"+min+" Minutes ," + sec+" Seconds";
                sec = parseInt(sec) - 1;                
                tim = setTimeout("examTimer()", 1000);
            }
            else {

			    if (parseInt(min)==0 && parseInt(sec)==0){
			    	document.getElementById("showtime").innerHTML = "Time Remaining :"+min+" Minutes ," + sec+" Seconds";
				     alert("Time Up");
				     document.questionForm.minute.value=0;
				     document.questionForm.second.value=0;
				     document.questionForm.submit();

			     }

                if (parseInt(sec) == 0) {				
				    document.getElementById("showtime").innerHTML = "Time Remaining :"+min+" Minutes ," + sec+" Seconds";					
                    min = parseInt(min) - 1;
					sec=59;
                    tim = setTimeout("examTimer()", 1000);
                }

            }
        }
    < /script>

< body onload=”examTimer”>

< form action="exam" method="post" name="questionForm" >
 < c:forEach var="choice" items="${sessionScope.quest.questionOptions}" varStatus="counter">
 < input type="radio" name="answer" value="${counter.count}" >${choice}  < br/>
 < /c:forEach> < br/> 

 < c:if test="${sessionScope.quest.questionNumber > 0}">
 < input type="submit" name="action" value="Previous" onclick="customSubmit()" />
 < /c:if>

 < c:if test="${sessionScope.quest.questionNumber <  sessionScope.totalNumberOfQuizQuestions-1}">
 < input type="submit" name="action" value="Next" onclick="customSubmit()" />
 < /c:if> 

 < input type="submit" name="action" value="Finish Exam" onclick="customSubmit()" />

< input type="hidden" name="minute"/> 
< input type="hidden" name="second"/>

< /form>
customSubmit() function


  function customSubmit(someValue){  
        	 document.questionForm.minute.value = min;   
        	 document.questionForm.second.value = sec; 
        	 document.questionForm.submit();  
        	 }


Front End Web Development Training
if(request.getParameter("minute")!=null)
			{			
			minute=Integer.parseInt(request.getParameter("minute"));
			second=Integer.parseInt(request.getParameter("second"));
			request.getSession().setAttribute("min",request.getParameter("minute") );
			request.getSession().setAttribute("sec",request.getParameter("second") );
			}
Handling the Time Up
When the duration of the quiz is over, in other words when both minute and second becomes zero.We show an alert box saying  “Time Up” and set the value of minute and second to zero and submit the form.

  if (parseInt(min)==0 && parseInt(sec)==0){
			    	document.getElementById("showtime").innerHTML = "Time Remaining :"+min+" Minutes ," + sec+" Seconds";
				     alert("Time Up");
				     document.questionForm.minute.value=0;
				     document.questionForm.second.value=0;
				     document.questionForm.submit();

			     }


else if("Finish Exam".equals(action)||( minute==0 && second==0))
			{   finish=true;
				int result=exam.calculateResult(exam);				
				request.setAttribute("result",result);
				request.getSession().setAttribute("currentExam",null);
				request.getRequestDispatcher("/WEB-INF/jsps/result.jsp").forward(request,response);

			}
			</html>


