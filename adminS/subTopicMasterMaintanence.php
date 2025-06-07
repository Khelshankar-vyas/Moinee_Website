<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
<?php
    include('commonCss.php');
?>

<title>SubTopic Maintanence</title>	
	
</head>

<body>
 <?php
        include('headerUtility.php');
    ?>

<script>

function selectTopicAndSubTopic(action)

{

	var urlString = "";

	//alert(document.getElementById('currentSubTopicsList').childNodes.item(document.getElementById('currentSubTopicsList').selectedIndex+1).innerHTML);

	if(action=="updateST")

	{

		if(document.SubTopicUpdate.currentSubTopicsList.value == 0)

		{

			alert("Select a subtopic");

			document.SubTopicUpdate.update.disabled = true;

			document.SubTopicUpdate.reset();

			return;

		}

		else

		{

			document.SubTopicUpdate.update.disabled = false;

			document.SubTopicUpdate.selectedSubTopicID.value = document.SubTopicUpdate.currentSubTopicsList.value;

			document.SubTopicUpdate.selectedSubTopicName.value = document.SubTopicUpdate.currentSubTopicsList.childNodes.item(document.SubTopicUpdate.currentSubTopicsList.selectedIndex+1).innerHTML;

			//document.SubTopicUpdate.displaySubTpcName.value = document.SubTopicUpdate.currentSubTopicsList.childNodes.item(document.SubTopicUpdate.currentSubTopicsList.selectedIndex+1).innerHTML;

			//alert('hi');

			var val = document.SubTopicUpdate.currentSubTopicsList.value;

			urlString = 'getSubTpcDetails.php?selectedSubTopicID=' + val;	

			//alert(urlString);

		}

	}

	else if(action=="updateT")

	{

		document.SubTopicUpdate.selectedTopicID.value = document.SubTopicUpdate.currentTopicsList.value;

		document.SubTopicUpdate.selectedTopicName.value = document.SubTopicUpdate.currentTopicsList.childNodes.item(document.SubTopicUpdate.currentTopicsList.selectedIndex+1).innerHTML;

	}

	else if(action=="insertT")

	{

		document.SubTopicInsert.selectedTopicID1.value = document.SubTopicInsert.currentTopicsList1.value;

		document.SubTopicInsert.selectedTopicName1.value = document.SubTopicInsert.currentTopicsList1.childNodes.item(document.SubTopicInsert.currentTopicsList1.selectedIndex+1).innerHTML;

	}

	else

	{

		alert ('wrong selection');	

	}

	

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

				

				var rText = xmlhttp.responseText;

				//alert(rText.indexOf('{'));

				//alert(rText.substring(rText.indexOf('{')));

				var obj = JSON.parse(rText);

				//alert(obj.successMsg);

				if (obj.success == 1)

				{

					//alert(obj.successMsg); //temp alert

					//now set the values in form elements.

					document.SubTopicUpdate.displaySubTpcName.value = obj.stDisplayName;

					document.SubTopicUpdate.selectedTopicName.value = obj.tName;
					console.log('a1');

					 for ( var i = 0; i < document.SubTopicUpdate.currentTopicsList.options.length; i++ ) 

					 {

						if ( parseInt(document.SubTopicUpdate.currentTopicsList.options[i].value) == parseInt(obj.tId) ) 

						{

							document.SubTopicUpdate.currentTopicsList.options[i].selected = true;

							//return;

						}
                        // console.log("Before Loop Start");
                        // console.log(obj.tName.trim());
                        // console.log(document.SubTopicUpdate.currentTopicsList.options[i].text.trim());
			                        /* if (document.SubTopicUpdate.currentTopicsList.options[i].text.trim() == obj.tName.trim()) 
			                         {
			                                //console.log("In Loop");
			                               // console.log(document.SubTopicUpdate.currentTopicsList.options[i].text.trim());
			                                //console.log(obj.tName.trim());
			                                document.SubTopicUpdate.currentTopicsList.selectedIndex = i;
			                                return;
			                         } */

					}

					//document.SubTopicUpdate.subTpcStatus.value = obj.status;

					for ( var i = 0; i < document.SubTopicUpdate.subTpcStatus.options.length; i++ ) 

					 {

						if ( document.SubTopicUpdate.subTpcStatus.options[i].value == obj.status ) 

						{

							document.SubTopicUpdate.subTpcStatus.options[i].selected = true;

							//return;

						}

					}
					console.log('a5');

					document.SubTopicUpdate.subTpcOverview.value = obj.overview;

					document.SubTopicUpdate.subTpcComment.value = obj.comments;
                    
                    document.SubTopicUpdate.displayCreatedBy.value = obj.createdBy;

					

					

				}

				else

				{

					alert(obj.successMsg);

				}

				

			}

		  }

		 // var urlString="updateTopic.php?currentTopics="+document.getElementById('currentTopics').value+"&selectedTopicName="+document.getElementById('selectedTopicName').value+"&selectedTopicID=&topicName=Maths&create_topic=Create+Topic";

		xmlhttp.open("GET",urlString,true);

		xmlhttp.send();

}

function deleteSubTopic()
{
	document.SubTopicUpdate.ACTION.value = "delete";
	document.SubTopicUpdate.submit();
}

function makeCloneOfSubTopic()
{
    if(document.SubTopicUpdate.selectedSubTopicName.value=="")
    {
        alert("Please Select Subtopic");
        return false;
    }
    else
    {
        var subTopicId=document.SubTopicUpdate.selectedSubTopicID.value;
        var subTopicName=document.SubTopicUpdate.selectedSubTopicName.value;
        var subTopicDisplayName=document.SubTopicUpdate.displaySubTpcName.value;
        var topicName=document.SubTopicUpdate.selectedTopicName.value;
        
        //call ajax to update the data
         var action="CLONE_SUBTOPIC";
         var data={
                ACTION:action,
                subtopicId:subTopicId,
                subtopicName:subTopicName,
                subtopoicDName:subTopicDisplayName,
                topicName:topicName
             };
    $.ajax({type: "GET",
          url: "insertUpdateSubTopic.php",
          data: data,
          success: function(result)
             {
                 //location.reload(true);
                // window.location='http://www.quizacademy.org/cloud/manage/subTopicMasterMaintanence.php?msg=Subtopic Clonned Successful'
                 if(result=="Already Exists")
                 {
                    window.location='http://www.quizacademy.org/cloud/manage/subTopicMasterMaintanence.php?msg=Subtopic Already Exists';
                    //window.location='http://localhost/quizacademy/cloud/manage/subTopicMasterMaintanence.php?msg=Subtopic Already Exists';
                 }
                 else
                 {
                    window.location='http://www.quizacademy.org/cloud/manage/subTopicMasterMaintanence.php?msg=Subtopic Clonned Successful';
                   //window.location='http://localhost/quizacademy/cloud/manage/subTopicMasterMaintanence.php?msg=Subtopic Clonned Successful';
                 }
                 }
             }
           );

    }
}
</script>


<a href="indexForMaintanencePages.html"><code>Back to Home</code></a>
<?php

	// include("ServerDetail.php");

	// error_reporting(E_ERROR | E_PARSE);




	// $con = mysql_connect($SERVER,$LOGIN,$PWD);

	// mysql_select_db($DATABASE, $con);

		
	// mysql_set_charset('utf8');
	// $queryStringTopicList = "SELECT * from `topic_master`";

	// $queryStringSubTopicList = "SELECT * from `subtopic_master`";

	

	// $resultTopicList = mysql_query($queryStringTopicList);

	// $resultSubTopicList = mysql_query($queryStringSubTopicList);

	

	// $num = mysql_num_rows($resultTopicList);

	// $num1 = mysql_num_rows($resultSubTopicList);

	

	// function getTopicDetails()

	// {

	// 	echo "working.......";

	// }


	// if(null == $_GET['msg'])

	// {

	// 	$msg = "";

	// }

	// else

	// {

	// 	$msg = $_GET['msg'];

	// 	echo "<h5><font color=red>".$msg."</font></h5>";

	// }

		

?>	
  <div class="container">
    <!--- page heading start -->
    <div class="container top-white-space"  id="">
            <div class="row">
                <div class="col-md-12" >
           <!--     <h1 class="sec-title text-center" ><span></span>DASHBOARD</h1> -->
                    <h2 class="sec-title"><span></span><strong> Sub-Topic Maintenance <hr></strong></h2>
                    
                </div>
            </div>
    </div>
    <!-- page heading end -->
    
    <!-- page body start--->
    <div class="container m-4 mt-0">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-update-tab" data-bs-toggle="tab" data-bs-target="#nav-update" type="button" role="tab" aria-controls="nav-update" aria-selected="true">Update SubTopic</button>
                    <button class="nav-link" id="nav-create-tab" data-bs-toggle="tab" data-bs-target="#nav-create" type="button" role="tab" aria-controls="nav-create" aria-selected="false">Add SubTopic</button>

                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent" style="border: 1px solid rgb(223, 220, 220); border-top:0px;">
                <!-- update course div -->
                <div class=" tab-pane fade show active" id="nav-update" role="tabpanel" aria-labelledby="nav-update-tab">
                    <div class=" container">

                        <form name="SubTopicUpdate" method="get" action="insertUpdateDeleteSubTopic.php">
                            <div class="row p-2">
                                <div class="col-md-12 order-md-2">
                                    <div class="form-group">
                                        <label for="courseList">Sub-Topic</label>
                                        <select class="form-control" name="currentSubTopicsList" onchange="selectTopicAndSubTopic('updateST')">
                                            <option value="">Sub-Topic</option>
                                            <?php

                                            $i = 0;

                                            echo "<option value='0'>Select Sub-Topic:</option>";

                                            while ($i < $num1) {

                                                $subTpc = mysql_result($resultSubTopicList, $i, "NAME");

                                                $subTpcId = mysql_result($resultSubTopicList, $i, "ID");

                                                echo "<option value='" . $subTpcId . "'>" . $subTpc . "</option>";

                                                $i++;
                                            }

                                            ?>

                                        </select>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 order-md-2 mb-4">
                                            <div class="form-group">
                                                <label for="selectedSubTopicName">Selected Sub-topic</label>
                                                <input class="form-control" type="text" name="selectedSubTopicName" id="selectedSubTopicName" value="" placeholder="Selected subtopic">
                                            </div>
                                        </div>
                                        <div class="col-md-6 order-md-2 mb-4">
                                            <div class="form-group">
                                                <label for="displaySubTpcName">Sub-Topic Display Name </label>
                                                <input class="form-control" type="text" name="displaySubTpcName" value="" id="displaySubTpcName" placeholder="Display Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 order-md-2 mb-4">
                                            <div class="form-group">
                                                <label for="currentTopicsList">Topic</label>
                                                <select class="form-control" name="currentTopicsList" id="currentTopicsList" onchange="selectTopicAndSubTopic('updateT')">

                                                    <?php

                                                    $i = 0;

                                                    //echo "<option value='blank'>Select Topic:</option>";

                                                    while ($i < $num) {

                                                        $tpc = mysql_result($resultTopicList, $i, "NAME");

                                                        $tpcId = mysql_result($resultTopicList, $i, "ID");

                                                        echo "<option value='" . $tpcId . "'>" . $tpc . "</option>";

                                                        $i++;
                                                    }

                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 order-md-2 mb-4">
                                            <div class="form-group">
                                                <label for="subTpcStatus">Status</label>
                                                <select class="form-control" name="subTpcStatus" id="subTpcStatus">
                                                    <option value="IN_PROGRESS">IN_PROGRESS</option>
                                                    <option value="ACTIVE">ACTIVE</option>
                                                    <option value="INACTIVE">INACTIVE</option>
                                                    <input type="hidden" id="currentStatus1" name="currentStatus1" />
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="selectedTopicName" value="" readonly>
                                    <input type="hidden" name="selectedTopicID" value="" />
                                    <input type="hidden" name="selectedSubTopicID" value="" />
                                    <input type="hidden" name="ACTION" value="update" />

                                    <div class="row">
                                        <div class="col-md-4 order-md-2 mb-4">
                                            <div class="form-group">
                                                <label for="displayCreatedBy">Created by</label>
                                                <input class="form-control" type="text" name="displayCreatedBy" id="displayCreatedBy" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 order-md-2 mb-4">
                                            <div class="form-group">
                                                <label for="subTpcOverview">Overview</label>
                                                <textarea class="form-control" name="subTpcOverview" id="subTpcOverview" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4 order-md-2 mb-4">
                                            <div class="form-group">
                                                <label for="subTpcComment">Comments</label>
                                                <textarea class="form-control" name="subTpcComment" id="subTpcComment" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input class="btn btn-primary" type="submit" name="update" value="UPDATE" disabled />
                            <input class="btn btn-primary" type="button" name="clone" value="CLONE" onclick="makeCloneOfSubTopic()" />
                        </form>
                    </div>
                </div>

                <!-- Add subtopic -->
                <div class=" tab-pane fade" id="nav-create" role="tabpanel" aria-labelledby="nav-create-tab">
                    <div class="container">
                        <form name="SubTopicInsert" method="get" action="insertUpdateDeleteSubTopic.php">
                            <div class="row p-2">
                                <div class="col-md-12 order-md-2 mb-4">
                                        <div class="row">
                                             <div class="col-md-6 order-md-2 mb-4">
                                                <div class="form-group">
                                                    <label for="subTopicName">Write sub-topic name</label>
                                                    <input class="form-control" type="text" id="subTopicName" name="subTopicName" value="" placeholder="Subtopic name">
                                                </div>
                                            </div>

                                            <div class="col-md-6 order-md-2 mb-4">
                                                <div class="form-group">
                                                    <label for="displaySubTpcName1">Sub-Topic Display Name </label>
                                                    <input class="form-control" type="text" name="displaySubTpcName1" id="displaySubTpcName1" value="" placeholder="Display Name">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 order-md-2 mb-4">
                                                <div class="form-group">
                                                    <label for="currentTopicsList1">Topic</label>
                                                    <select class="form-control" name="currentTopicsList1" id="currentTopicsList1" onchange="selectTopicAndSubTopic('insertT')">
                                                        <?php

                                                        $i = 0;

                                                        echo "<option value='blank'>Select Topic:</option>";

                                                        while ($i < $num) {

                                                            $tpc = mysql_result($resultTopicList, $i, "NAME");

                                                            $tpcId = mysql_result($resultTopicList, $i, "ID");

                                                            echo "<option value='" . $tpcId . "'>" . $tpc . "</option>";

                                                            $i++;
                                                        }

                                                        ?>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6 order-md-2 mb-4">
                                                <div class="form-group">
                                                    <label for="statusCourse1">Status</label>
                                                    <select class="form-control" name="subTpcStatus1" id="subTpcStatus1">
                                                        <option value="IN_PROGRESS">IN_PROGRESS</option>
                                                        <option value="ACTIVE">ACTIVE</option>
                                                        <option value="INACTIVE">INACTIVE</option>
                                                        <input type="hidden" id="currentStatus1" name="currentStatus1" />
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                            <input type="hidden" name="selectedTopicName1" value="" readonly>
                                            <input type="hidden" name="selectedTopicID1" value="" />
                                            <input type="hidden" name="ACTION" value="insert" />

                                        <div class="row">
                                            <div class="col-md-4 order-md-2 mb-4">
                                                <div class="form-group">
                                                    <label for="displayCreatedBy1">Created by</label>
                                                    <input class="form-control" type="text" name="displayCreatedBy1" id="displayCreatedBy1" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 order-md-2 mb-4">
                                                <div class="form-group">
                                                    <label for="subTpcOverview1">Overview</label>
                                                    <textarea class="form-control" name="subTpcOverview1" id="subTpcOverview1" rows="3"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-4 order-md-2 mb-4">
                                                <div class="form-group">
                                                    <label for="subTpcComment1">Comments</label>
                                                    <textarea class="form-control" name="subTpcComment1" id="subTpcComment1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <input class="btn btn-primary mb-2" type="submit" name="insert" value="ADD" />

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div></div>

    <!-- page body end -->

<?php
        include('footer.php');
    ?>
</body>
<?php
 include('commonJS.php')
?>
    
</html>