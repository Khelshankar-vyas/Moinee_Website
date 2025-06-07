<?php
    //include('session.php');
?>

<html>

<head>
<meta charset="UTF-8">
<?php
    include('commonCss.php');
?>

   
<title>Topic Master Maintanence Page</title>


</head>

	
<script>

	function updateDeleteTopic(action)

	{

		var urlString;

		//document.getElementById("myDiv").innerHTML="Processing...";

		if(action=="update")

		{

			document.updateTopicForm.action = "../manageSection/manage/updateTopic.php";

			//document.updateTopicForm.submit();

			urlString="../manageSection/manage/updateTopic.php?currentTopics="+document.getElementById('currentTopics').value+"&selectedTopicName="+document.getElementById('selectedTopicName').value+"&selectedTopicID=&topicName=Maths&create_topic=Create+Topic";
        
		}

		else if(action=="delete")

		{

			document.updateTopicForm.action = "../manageSection/manage/DeleteTopic.php";

			urlString="../manageSection/manage/DeleteTopic.php?selectedTopicName="+document.getElementById('selectedTopicName').value;

			//document.updateTopicForm.submit();

		}

		else if(action=="insert")

		{

			document.updateTopicForm.action = "../manageSection/manage/createTopic.php";

			//document.updateTopicForm.submit();

			urlString="../manageSection/manage/createTopic.php?topicName="+document.getElementById('topicName').value;

		}

		////document.updateTopicForm.submit();

		//this is ajax alternate for above submit

		var xmlhttp;

		if (window.XMLHttpRequest)

		  {// code for IE7+, Firefox, Chrome, Opera, Safari

			  xmlhttp=new XMLHttpRequest();

		  }

		else

		  {// code for IE6, IE5

			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

		  }

		xmlhttp.onreadystatechange=function()

		  {

			if (xmlhttp.readyState==4 && xmlhttp.status==200)

			{

				

				document.getElementById("myDiv").innerHTML=xmlhttp.responseText;

			}

		  }

		 // var urlString="updateTopic.php?currentTopics="+document.getElementById('currentTopics').value+"&selectedTopicName="+document.getElementById('selectedTopicName').value+"&selectedTopicID=&topicName=Maths&create_topic=Create+Topic";

		//alert(urlString);
		xmlhttp.open("GET",urlString,true);

		xmlhttp.send();

	}

	

	

	function EditTextBox()

	{

		//document.getElementById('selectedTopicName').value=document.getElementById('currentTopics').value;

                document.getElementById('selectedTopicName').value=$("#currentTopics option[value="+document.getElementById('currentTopics').value+"]").text();

                document.getElementById('selectedTopicId').value = document.getElementById('currentTopics').value;
                 
		checkForChange();

	}
	
    function getTSeletctedOptionTextByValue(val) 
    {
            var a = document.getElementById("currentTopics");
            for (var i = 0; i < a.length; i++)
            {
                var option = a.options[i];
                if (option.value == val) 
                {
                    return option.text;
                }
            }
    }
	function checkForChange()

	{

		//alert(document.getElementById('currentTopics').childNodes.item(document.getElementById('currentTopics').selectedIndex+1).value);

		if(document.getElementById('selectedTopicName').value==getTSeletctedOptionTextByValue(document.getElementById('currentTopics').value))

		{

			document.getElementById('update').disabled = true; //
			document.getElementById('delete').disabled = false; //

		}

		else

		{

			document.getElementById('update').disabled = false;

			document.getElementById('delete').disabled = true;

			

		}

	}

		

	

</script>
<body>
    <!-- include header file -->
    <?php
        include('headerUtility.php');
    ?>
    <!-- start--->
    <!-- class start -->
<div class="container">

       <!-- Topic Header -->
    <div class="container top-white-space"  id="content">
            <div class="row">
                <div class="col-md-12" >
                    <h2 class="sec-title"><span></span><strong> Topic Maintenance <hr></strong></h2>
                </div>
            </div>
    </div>
       <!-- Topic Header -->

    <div class="container m-4 mt-0">  <!-- Upper button change -->
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="update_topic" data-bs-toggle="tab" data-bs-target="#nav-update" type="button" role="tab" aria-controls="nav-update" aria-selected="true">Update Topic</button>
                    <button class="nav-link" id="add_topic" data-bs-toggle="tab" data-bs-target="#nav-create" type="button" role="tab" aria-controls="nav-create" aria-selected="false">Create New Topic</button>

                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent" style="border: 1px solid rgb(223, 220, 220); border-top:0px;">
                <!-- update course div -->
                <div class=" tab-pane fade show active" id="nav-update" role="tabpanel" aria-labelledby="nav-update-tab">
                    <div class=" container">

                       <!-- update topic start -->
                        <form name="TopicUpdate" method="" action="">
                            <div class="row p-2">
                                <div class="col-md-12 order-md-2">
                                    <div class="form-group">
                                        <h5>Update / Delete </h5>
                                        <label for="courseList">Select the topic which you want to update or delete</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 order-md-2 mb-4">
                                            <div class="form-group">
                                               <select class="form-control" name="currentTopics" id="currentTopics" onchange='EditTextBox()'>
                                                   <option value="">Select Topic</option>
                                                   	<?php

                                                    	include("../manageSection/manage/ServerDetail.php");
                                                        error_reporting(E_ERROR | E_PARSE);
                                                    	$con = mysql_connect($SERVER,$LOGIN,$PWD);
                                                    	mysql_select_db($DATABASE, $con);
                                                    	mysql_set_charset('utf8');
                                                    	
                                                    	//code for options
                                                    	$queryString = "SELECT `ID`,`NAME` from `topic_master`";
                                                    	$result = mysql_query($queryString);
                                                    	$num = mysql_numrows($result);
                                                    	$i=0;
                                                    	while ($i < $num)
                                                    	{
                                                    	    $tpc = mysql_result($result,$i,"NAME");
                                                            $tpcId = mysql_result($result,$i,"ID");
                                                            echo "<option value='".$tpcId."'>".$tpc."</option>";
                                                    		$i++;
                                                    	}
                                                    	?>
                                               </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 order-md-2 mb-4">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="selectedTopicName" value="" id="selectedTopicName" placeholder="Selected Topic" onChange="checkForChange()">
                                                <input type="hidden" id="selectedTopicId" name="topicId" value=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <input style="background-color: #5838fc" class="btn btn-primary" type="submit" name="update" id="update" value="UPDATE" onClick="updateDeleteTopic('update')" disabled  />
                                                <input style="background-color: #5838fc" class="btn btn-primary" type="button" name="delete" id="delete" value="DELETE"  onClick="updateDeleteTopic('delete')" disabled/>
                        </form>
                        <!-- update topic end -->
                    </div>
                </div>
  
<!-- 
<input type="text" name="topicName" id="topicName" />

<input type="button" name="create_topic" value="Create Topic" onClick="updateDeleteTopic('insert')" />
-->

  
                <!-- Add topic -->
                <div class=" tab-pane fade" id="nav-create" role="tabpanel" aria-labelledby="nav-create-tab">
                    <div class="container">
                        <form name="addtopic" method="" action="">
                            <div class="row p-2">
                                <div class="col-md-12 order-md-2">
                                    <div class="form-group">
                                        <h5>Topic Name: </h5>
                                        <label for="courseList">Write the topic name you want to insert</label>
                                        <input class="form-control" type="text" id="topicName" name="topicName" value="" placeholder="New Topic">
                                    </div>
                                </div>
                            </div>
                                        <input style="background-color: #5838fc" class="btn btn-primary" type="button" name="create_topic" id="create_topic" value="Create Topic" onClick="updateDeleteTopic('insert')"  />           
                        </form>
                    </div>
                </div>
                <!-- Add topic -->
            </div>
    </div>

</div>
<!-- class End -->
    <!-- Footer File -->
    <?php
        include('footer.php');
    ?>
    <!-- end --->
    

</body>
<?php
 include('commonJS.php')
?>
    

</html>