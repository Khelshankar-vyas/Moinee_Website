<?php
// error_reporting(E_ERROR | E_PARSE);

// session_start();
 
// if(isset($_SESSION['views']))

// {

// 	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 180000)) 

// 	{

// 		// last request was more than 30 minutes ago

// 		session_unset();     // unset $_SESSION variable for the runtime 

// 		session_destroy();   // destroy session data in storage

// 		echo "<script type=\"text/javascript\">window.location = \"index.php\"</script>";

// 	} 

//         else

// 	{

		

// 	}

// } 

// else

// {

// 	echo "<script type=\"text/javascript\">window.location = \"noaccess.html\"</script>";

// }
?>
<html>

<head>
<meta charset="UTF-8">
<?php
    include('commonCss.php');
?>

   
<title>Course Maintenance</title>


</head>

	

<body>
    <!-- include header file -->
    <?php
        include('headerUtility.php');
    ?>
    <!-- start--->
    <!-- class start -->

<script>

function setSelectOptionByValue(selectId, optionValue)
{
    //$('#'+selectId+' option[value="' + optionValue + '"]').prop('selected', true); //this did not work as is
    return $("#"+selectId).val(optionValue); //it is doing both - setting and returning
	
}
function loadCourses()
{
	var CID = document.getElementById('courseList').value;
	//if(CID < 0)
	window.location.href="courseMasterMaintanence.php?cid="+CID;
	
	setSelectOptionByValue('courseList', CID);
	
}
function ChangeUpdateDivTag()
{
	// this condintion will generate the section of upadation of course 
	   document.getElementById('createDiv').style.display="none";
	   document.getElementById("updateDiv").style.display="block";
	
}
function ChangeCreateDivTag()
{
		//this condition will generate the section of creation of course
		document.getElementById("updateDiv").style.display="none";
		document.getElementById("createDiv").style.display="block";
	
}


function submitUpdate(action)
{
	onCourseNameChangeOnUpdation();
	//to prevent user from submitting without giving course name.
	var courseNameByUser = document.getElementsByClassName("courseUpdation")[0].value;
	if(courseNameByUser == "")
	{
		alert("Please fill course name");
	}
	else
	{
		selectAllChoices(document.getElementById('FC'));
		
		//alert("update");
		
		document.updateForm.submit();
	}
}


function submitCreate(action)
{
	onCourseNameChangeOnCreation();
	//to prevent user from submitting without giving course name.
	var courseNameByUser1 = document.getElementsByClassName("courseCreation")[0].value;
	if(courseNameByUser1 == "")
	{
		alert("Please fill course name");
	}
	else
	{
		selectAllChoices(document.getElementById('SelectedSubtopicsa'));
		
		//alert("create");
		
		document.CourseCreate.submit();
	}
}

function SelectMoveRows(SS1,SS2)
{
    var SelID='';
    var SelText='';
    // Move rows from SS1 to SS2 from bottom to top
    for (i=SS1.options.length - 1; i>=0; i--)
    {
        if (SS1.options[i].selected == true)
        {
            SelID=SS1.options[i].value;
            SelText=SS1.options[i].text;
            var newRow = new Option(SelText,SelID);
            SS2.options[SS2.length]=newRow;
            SS1.options[i]=null;
        }
    }
	 //SelectSort(SS2);
	  sortSelect(SS2);
}
function sortSelect(selElem) {
    var tmpAry = new Array();
    for (var i=0;i<selElem.options.length;i++) {
        tmpAry[i] = new Array();
        tmpAry[i][0] = selElem.options[i].text;
        tmpAry[i][1] = selElem.options[i].value;
    }
    tmpAry.sort();
    while (selElem.options.length > 0) {
        selElem.options[0] = null;
    }
    for (var i=0;i<tmpAry.length;i++) {
        var op = new Option(tmpAry[i][0], tmpAry[i][1]);
        selElem.options[i] = op;
    }
    return;
}
function SelectSort(SelList)
{
    var ID='';
    var Text='';
    for (x=0; x < SelList.length - 1; x++)
    {
        for (y=x + 1; y < SelList.length; y++)
        {
            if (SelList[x].text > SelList[y].text)
            {
                // Swap rows
                ID=SelList[x].value;
                Text=SelList[x].text;
                SelList[x].value=SelList[y].value;
                SelList[x].text=SelList[y].text;
                SelList[y].value=ID;
                SelList[y].text=Text;
            }
        }
    }
}

function fillExistingValues(s)
{
	//alert ("Hi");
	
    // loop every item of firrst selection box
    for (i=document.getElementById('F').options.length - 1; i>=0; i--)
    {
		//alert ("Hi1");
        if (in_array(s, document.getElementById('F').options[i].value))
        {
			//alert ("Hi2");
			document.getElementById('F').options[i].selected = true; 
        }
    }
	
	SelectMoveRows(document.getElementById('F'),document.getElementById('FC'));
}	
	
function in_array(array, id) {
    for(var i=0;i<array.length;i++) {
		//alert (array[i]+" - "+id);
        if(array[i] == id) {
            return true;
        }
    }
    return false;
}
function selectAllChoices(SS)
{
	//fill select 4 arr
	for (var j = 0; j < SS.options.length; j++) 
	{ 
             SS.options[j].selected = true; 
    } 
}
	
function setStatusOfCourse1()
{
	document.updateForm.currentStatus.value = document.updateForm.statusCourse1.value;
}

//to validate course name while user is creating new course
function onCourseNameChangeOnCreation()
{
	var courseNameForValidation = document.getElementsByClassName("courseCreation")[0].value;
	//alert("hgfdhgfhg");
	//alert(courseNameForValidation);
	//to validate if course name is not numeric 
	if(isNaN(courseNameForValidation))
		{
			//alert("valid course name");
		}
	else
		{
			alert("Course name should be alphanumeric.");
			document.getElementsByClassName("courseCreation")[0].value="";
			}
			
	//to validate if course name already exixts in database.	
	var x = document.getElementById("courseList");
    var i;
    for (i = 0; i < x.length; i++) {
       var txt = x.options[i].text;
	   if(txt == courseNameForValidation)
	   {
			alert("Course with this name already exists. Give some other name.");
			document.getElementsByClassName("courseCreation")[0].value="";
			return true;
	   }
	   else
	   {
	   
	   }
    }	
	
}

//to validate course name while user is updating old course
function onCourseNameChangeOnUpdation()
{
	var courseNameForValidation1 = document.getElementsByClassName("courseUpdation")[0].value;
	var existingCourseId = "<?php //echo $_GET['cid'] ?>";
	var e = document.getElementById("courseList");
	//var existingCourseName = e.options[existingCourseId].text;
	//var existingCourseName = e.options[e.selectedIndex].text;
	var j;
    for (j = 0; j < e.length; j++)
	{
       var txt = e.options[j].value;
	   if(txt == existingCourseId)
	   {
			var existingCourseName = e.options[e.selectedIndex].text;
			console.log(existingCourseName);
	   }
	   else
	   {
	   
	   }
    }	
	//alert(existingCourseName);
	//alert("hgfdhgfhg");
	//alert(courseNameForValidation1);
	//to validate if course name is not numeric 
	if(isNaN(courseNameForValidation1))
		{
			//alert("valid course name");
		}
	else
		{
			alert("Course name should be alphanumeric.");
			document.getElementsByClassName("courseUpdation")[0].value="";
			}
			
	//to validate if course name already exixts in database.	
	var x = document.getElementById("courseList");
    var i;
    for (i = 0; i < x.length; i++) {
       var txt = x.options[i].text;
	   if(txt == courseNameForValidation1 && txt != existingCourseName)
	   {
			alert("Course with this name already exists. Give some other name.");
			document.getElementsByClassName("courseUpdation")[0].value="";
			return true;
	   }
	   else
	   {
	   
	   }
    }	
	
}
	// JavaScript Document
</script>

<div class="container">

       <!--  Header  start-->
    <div class="container top-white-space"  id="utilityName">
            <div class="row">
                <div class="col-md-12" >
                    <h2 class="sec-title"><span></span><strong> Course Maintenance <hr></strong></h2>
                </div>
            </div>
    </div>
       <!--  Header end -->

       <!-- Content Start -->
    <!--   <div id="myDiv" style="background-color:#699"><h2></h2></div>
<input type="button" name="UpdateCourse" id="UpdateCourse" value="Update" onClick="ChangeUpdateDivTag()"/>
<input type="button" name="CreateCourse1" id="CreateCourse1" value="Create" onClick="ChangeCreateDivTag()"/> -->
       <div class="container m-4 mt-0">  <!-- Upper button change -->
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="update_topic" data-bs-toggle="tab" data-bs-target="#nav-update" type="button" role="tab" aria-controls="nav-update" aria-selected="true">Update Course</button>
                    <button class="nav-link" id="add_topic" data-bs-toggle="tab" data-bs-target="#nav-create" type="button" role="tab" aria-controls="nav-create" aria-selected="false">Create Course</button>

                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent" style="border: 1px solid rgb(223, 220, 220); border-top:0px;">
                <!-- update course div -->
                <div class=" tab-pane fade show active" id="nav-update" role="tabpanel" aria-labelledby="nav-update-tab">
                    <div class=" container">
                    <div class="row p-2">
                    <div class="col-md-12 order-md-2">
                    <div class="form-group">
                    <form name="updateForm" method="get" action="updateCourse.php">
                                            <div class="row mt-2">
                                                <div class="col-md-6 order-md-1">
                                                    <div class="form-group">
                                                        <label for="courseList">Select a Course</label>
                                                            <select class="form-control" name="courseList" id="courseList" onChange="loadCourses()" >
                                                                <option value="">Select a Course</option> 
                                                                <?php
							$selectedCId = $_GET['cid'];
							if(null == $selectedCId)
							{
								$selectedCId = 1;
							}
							//lets define few variable
						   
							include("ServerDetail.php");
							
							$con = mysql_connect($SERVER,$LOGIN,$PWD);
							mysql_select_db($DATABASE, $con);
							mysql_set_charset('utf8');
							$queryString = "SELECT * from `course_master`";
							$result = mysql_query($queryString);
							$num = mysql_numrows($result);
			
							$queryString2 = "SELECT * from `course_master` WHERE `ID` = $selectedCId";
							$result2 = mysql_query($queryString2);
							$num2 = mysql_numrows($result2);
			
							$i=0;
							while ($i < $num)
							{
								$tpc = mysql_result($result,$i,"NAME");
								$tpcid=mysql_result($result,$i,"ID");
								echo "<option value='".$tpcid."'>".$tpc."</option>";
								//if tpcid == selectedCId then set that option as selected in this list
									//also set the values for variables.
								if($tpcid == $selectedCId)
								{
									$courseName = mysql_result($result,$i,"NAME");
									$courseDisc = mysql_result($result,$i,"OVERVIEW");
									$courseStatus = mysql_result($result,$i,"STATUS");
									$courseCategory = mysql_result($result,$i,"CATEGORY");
									$courseTags = mysql_result($result,$i,"TAGS");
								}    
								$i++;
							}
						?>                                                              
					</select><script>$("#courseList").val("<?php echo $_GET['cid'];?>"); //it is doing both - setting and returning</script>
                                                    </div>
                                                <div>
                                                <input type="hidden" name="actiontype" value="UPDATE" />
                                                <input type="hidden" name="courseId" value="<?php echo $selectedCId;?>" />
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 order-md-2 mb-4">
                                                    <div class="form-group">
                                                       <label for="courseDisc">Overview</label>
                                                       <textarea class="form-control" name="courseDisc" id="courseDisc" rows="3"><?php  echo mysql_result($result2,0,'OVERVIEW'); ?>  </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 order-md-2 mb-4">
                                                    <div class="form-group">
                                                       <label for="courseDisc">Category</label>
                                                       <textarea class="form-control" name="courseCategory" id="courseCategory" rows="3" value="<?php echo mysql_result($result2,0,'CATEGORY'); ?>"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                                    <div class="form-group">
                                                        <label for="currentStatus">Current Status</label>
                                                        <input class="form-control" type="text" id="currentStatus" name="currentStatus"  value="<?php echo mysql_result($result2,0,'STATUS'); ?>" readonly>
                                                    </div>
                                        </div>
                                        <div class="col-md-6 order-md-2">
                                                    <div class="form-group">
                                                        <label for="courseName">Course Name</label>
                                                        <input class="form-control courseUpdation" type="text" name="courseName" id="courseName" placeholder="Course Name" onChange="onCourseNameChangeOnUpdation()" size="30" value="<?php  echo mysql_result($result2,0,'NAME');?>">
                                                    </div>
                                            <div class="row">
                                                <div class="col-md-6 order-md-2 mb-4">
                                                    <div class="form-group">
                                                        <label for="courseComments">Comments</label>
                                                        <textarea class="form-control" name="courseComments" id="courseComments" rows="3"><?php  echo mysql_result($result2,0,'COMMENTS');?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 order-md-2 mb-4">
                                                    <div class="form-group">
                                                        <label for="courseTags">Tags</label>
                                                        <textarea class="form-control" name="courseTags" id="courseTags" rows="3"><?php  echo mysql_result($result2,0,'TAGS');?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="statusCourse1">Status</label>
                                                <select class="form-control" name="statusCourse1" id="statusCourse1" onchange="setStatusOfCourse1()" >
                                                <?php 
						$queryString1 = "SELECT DISTINCT `STATUS` from `subtopic_master`";
						$result1 = mysql_query($queryString1);
						$num1 = mysql_numrows($result1);
						$i=0;
						while ($i < $num1)
							{
								$status1 = mysql_result($result1,$i,"STATUS");
								echo "<option value='".$status1."'>".$status1."</option>";
								$i++;
							}
			  		?>
                                            </select>
                                            </div>
                                        </div>
                                </div>
                          <div class="row mt-2">
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <label for="F">Subtopics</label>
                                      <select multiple class="form-control" name="Features" id="F" MULTIPLE>
                                      <?php       
				    $cid = $_GET['cid']; //resolve for first time.
					if(null==$cid)
					{
						$cid = 1;
					}
					echo $cid;
					include("ServerDetail.php");
					$con = mysql_connect($SERVER,$LOGIN,$PWD);
					mysql_select_db($DATABASE, $con);
					$queryString = "SELECT * from `subtopic_master`";
					$result = mysql_query($queryString);
					//get mapping
					$qsGetSubTpcIdsForQid = "SELECT `SUBTOPIC_ID` FROM `course_subtopic_mapping`  where `COURSE_ID` = $cid";
					$result1 = mysql_query($qsGetSubTpcIdsForQid);	
					$num = mysql_numrows($result);
					$i=0;
					while ($i < $num)
					{
						$tpc = mysql_result($result,$i,"NAME");
						$tpcid=mysql_result($result,$i,"ID");
						echo "<option value='".$tpcid."'>".$tpc."</option>";
						$i++;
					}
				?>
                   </select>
                                  </div>
                              </div>
                              <div class="col-md-2">
                                  <div class="form-group">
                                      <button style = "width:50px; height:40px; border:none; background:teal; color:white; cursor: pointer;" type = "" class = "btn-list" id="" onClick="SelectMoveRows(document.updateForm.Features,document.getElementById('FC'))" >
                                          <i class = "fa fa-plus" aria-hidden="true" ></i>
                                      </button>
                                      <button style = "width:50px; height:40px; border:none; background:teal; color:white; cursor: pointer; margin-top: 65px;margin-left: 30px;" type = "" class = "btn-list" id="" onClick="SelectMoveRows(document.getElementById('FC'),document.updateForm.Features)" >
                                          <i class = "fa fa-minus" aria-hidden="true" ></i>
                                      </button>   
                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <label for="FC"> Selected Subtopics</label>
                                         <select multiple class="form-control" name="SelectedSubtopics[]" id="FC" MULTIPLE></select>
                                  </div>
                              </div>
                          </div>
                              <input style="background-color: #5838fc" type="button" class="btn btn-primary" id="" name="Update" value="UPDATE" onClick="submitUpdate()"/>
                        </form>
<script>var arr = new Array(); 
	//alert ("1");
</script>
<?php
	 while($rowq =  mysql_fetch_array($result1))
	{   //$value = $rowq[''];
		//echo "qqq";
?>
	<script>
		arr.push([<?php echo $rowq['SUBTOPIC_ID']?>]);
		//alert (<?php  echo $rowq['SUBTOPIC_ID']?>);
	</script>
<?php
		//echo $rowq['SUBTOPIC_ID'];
	}
echo "<script> this.fillExistingValues(arr); </script>";
?>
                        </div>
                        </div>
                        </div>  
                    </div>
                </div>
<div id="createDiv" style="display:none"></div>
<script>
function ShowCourseDetail()
{
	document.getElementById('CourseDetail').style.visibility="visible";
	document.getElementById('CreateCourse').disabled="true";
}

function ShowSubtopics()
{
	//alert("hii");
	var CID = document.getElementById('CourseDetail').value;
	//alert (CID);
	
	//var actionString = "SelectSubtopics.php";
	document.TopicCreate.action = "SelectSubtopics.php";
	document.TopicCreate.submit();
}

function setStatusOfCourse()
{
	document.CourseCreate.currentStatus1.value = document.CourseCreate.statusForCreateCourse.value;
}
</script>
                <!-- Add topic -->
                <div class=" tab-pane fade" id="nav-create" role="tabpanel" aria-labelledby="nav-create-tab">
                    <div class="container">
                    <form name="CourseCreate" method="get" action="createCourse.php">
                
                <div class="row mt-2">
                    <div class="col-md-12 order-md-2">
                        <div class="form-group">
                            <label for="courseName">Course Name</label>
                            <input class="form-control courseUpdation" type="text" name="courseName" id="courseName"  onChange="onCourseNameChangeOnCreation()"  placeholder="Course Name">
                        </div>
                        <div class="row">
                            <div class="col-md-4 order-md-2 mb-4">
                                <div class="form-group">
                                    <label for="courseComments">Overview</label>
                                    <textarea class="form-control" name="courseDisc" id="courseDisc" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4 order-md-2 mb-4">
                                <div class="form-group">
                                    <label for="courseComments">Comments</label>
                                    <textarea class="form-control" name="courseComments" id="courseComments" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4 order-md-2 mb-4">
                                <div class="form-group">
                                    <label for="courseTags">Tags</label>
                                    <textarea class="form-control" name="courseTags" id="courseTags" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 order-md-2 mb-4">
                                <div class="form-group">
                                    <label for="courseCategory">Category</label>
                                    <input class="form-control" type="text" name="courseCategory" id="courseCategory" placeholder="Category">
                                </div>
                            </div>
                            <div class="col-md-6 order-md-2 mb-4">
                                <div class="form-group">
                                    <label for="statusCourse1">Status</label>
                                    <select class="form-control" name="statusForCreateCourse" id="statusForCreateCourse" onchange="setStatusOfCourse()" >
                                    <?php 
				$queryString = "SELECT DISTINCT `STATUS` from `subtopic_master`";
				$result = mysql_query($queryString);
				$num = mysql_numrows($result);
				$i=0;
				while ($i < $num)
					{
						$status = mysql_result($result,$i,"STATUS");
						echo "<option value='".$status."'>".$status."</option>";
						$i++;
					}
			?>
                                </select>
                                <input type="hidden" id="currentStatus1" name="currentStatus1"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="F">Subtopics</label>
                            <select multiple class="form-control" name="Subtopiclist" id="Subtopiclist" MULTIPLE>
                            <?php
							include("ServerDetail.php");
							$con = mysql_connect($SERVER,$LOGIN,$PWD);
							mysql_select_db($DATABASE, $con);
							$queryString = "SELECT * from `subtopic_master`";
							$result = mysql_query($queryString);
							$num = mysql_numrows($result);
							$i=0;
							while ($i < $num)
								{
									$tpc = mysql_result($result,$i,"NAME");
									$tpcid=mysql_result($result,$i,"ID");
									echo "<option value='".$tpcid."'>".$tpc."</option>";
									$i++;
								}
				?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <div class="form-group">
                            <button style = "width:50px; height:40px; border:none; background:teal; color:white; cursor: pointer;"  class = "btn-list" id="" onClick="SelectMoveRows(document.CourseCreate.SubtopicList,document.getElementById('SelectedSubtopicsa'))" >
                                <i class = "fa fa-plus" aria-hidden="true" ></i>      
                            </button>
                            <button style = "width:50px; height:40px; border:none; background:teal; color:white; cursor: pointer; margin-top: 65px;margin-left: 30px;" type = "" class = "btn-list" id="" onClick="SelectMoveRows(document.getElementById('SelectedSubtopicsa'),document.CourseCreate.SubtopicList)">
                                <i class = "fa fa-minus" aria-hidden="true" ></i>    
                            </button>  
                    </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="FC"> Selected Subtopics</label>
                            <select multiple class="form-control" name="SelectedSubtopics[]" id="SelectedSubtopicsa" MULTIPLE>
                            </select>
                        </div>
                    </div>
                </div>
                <input style="background-color: #5838fc" class="btn btn-primary mb-2" type="button" name="Create" value="CREATE" id="" onClick="submitCreate()"  />

            </form>
                    </div>
                </div>
                <!-- Add topic -->
            </div>
    </div>







</div>

    <!-- Content End -->
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