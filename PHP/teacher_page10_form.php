<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="41">';
  echo '<input type="hidden" name="end_Q_num" value="49">';
  
?>

	<H1>Page 10 Data Entry</H1>

		<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Student Development</B></U></P>
<!-- ~,~`~,~`~,~` -->
	
	
	<!-- #1	~,~`~,~`~,~` -->

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	Now, I want to ask you about the progress you feel that your students made in the Pre-K program. Using the response option of, 1, No Progress, 2, Little Progress, 3, Some Progress, or 4, A Lot of Progress, please tell me:
<SPAN class="direction">
	<br><br>[HAND INTERVIEWEE THE LIST]
	</SPAN>
	<br><br>
	Overall, how much progress do you feel the students in your Pre-K program made in the following areas:
	</P>
<?php
	
		$arrQs[41] = '41.  Understanding and using oral speech (Language)';
		$arrQs[42] = '42.  Getting along with other children (Social)';
		$arrQs[43] = '43.  Getting along with adults (Social)';
		$arrQs[44] = '44.  Taking care of his/her own self-care needs (Self-care)';
		$arrQs[45] = '45.  Using small and large arm and legs muscles (Motor)';
		$arrQs[46] = '46.  Recognizing colors and alphabets (Pre-academic)';
		$arrQs[47] = '47.  Printing his/her name (Pre-academic)';
		$arrQs[48] = '48.  Problem solving skills';
		$arrQs[49] = '49.  Your students\' learning progress as a result of this program.';
		

		$arrScale = array( '1<BR />No<BR />progress', '2<BR />Little<BR />progress', '3<BR />Some<BR />progress', '4<BR />A lot of<BR />progress');
		 
		
		for ($i = 41; $i <= 49; $i++)
		{
			foreach ($arrScale as $field)
			{
				$field = str_replace('<BR />', ' ', $field);
				
				$arrRow[] = gen_form_input('radio_blank', 'Q' . $i . '_radio', $field);
				
			}
			
			array_unshift($arrRow, $arrQs[$i]);
			
			$arrTable[] = $arrRow;
			unset($arrRow);
		}
		
		array_unshift($arrScale, '&nbsp;');
		array_unshift($arrTable, $arrScale);
		
		echo '<DIV class="qb" name="Q41-49">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";
?>
<br><br>
	<?php #**** BEGIN FOOTER ****
		
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>