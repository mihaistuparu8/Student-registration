<?php 

use Helpers\Url;
use Helpers\Request;

 ?>

<div class="application-form">
	<div class="container">
		<div class="row">
			<div class="xs-hidden col-md-3 col-sm-2"></div>
			<div class="col-xs-12 col-md-6 col-sm-8">
				<div class="form">
					<div class="row form-header">
						<div class="col-xs-9">
							<h1 class="form_title">Student Application Form</h1>
						</div>
						<div class="col-xs-3">
							<a href ="http://www.valahia.ro/ro/" target="blank">
								<img class="sigla" src="<?php echo Url::templatePath(); ?>/img/SiglaUVT.jpg" alt="...">
							</a>	
						</div>
					</div>
					<form action="<?php echo DIR ; ?>application" method="POST"> <!--form start-->
						<div class="first-form"> <!-- first form start -->
							<div class="row sending-institution">
								<div class="col-xs-12 col-sm-6">
									<label class="application-label">
										<p class="label-title">* Academic year</p>
										<input class="form-control" type="text" name="academic_year" placeholder= "* Academic Year 20../20.." value = "<?php echo $user['academic_year']; ?>" >
									</label>
								</div>
								<div class="col-xs-12 col-sm-6">
									<label class="application-label">
										<p class="label-title">* Field of study</p>
										<input class="form-control" type="text" name="field_study" placeholder= "* Field of study:" value = "<?php echo $user['field_study']; ?>">
									</label>
								</div>
								<div class="col-xs-12">
									<p class="subtitle"><span class="glyphicon glyphicon-education"></span> Sending institution</p>
									<label class="application-label">
										<p class="label-title">* Name and full address</p>
										<input class="form-control" type="text" name="sending_institution" placeholder= "* Name and full address" value = "<?php echo $sending['sending_institution']; ?>" >
									</label>
									<div class="row">
										<div class="col-xs-12">
											<fieldset>
												<legend class="label-title">* Departament coordinator</legend>
													<div class="row">
														<div class="col-xs-12 col-sm-6">
															<div class="input-group sending-institution-grup">
													      <div class="application-addon input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
													      <input type="text" class="form-control" name="dept_name" placeholder="* Name">
													    </div>
														</div>
														<div class="col-xs-12 col-sm-6">
															<div class="input-group sending-institution-grup">
													      <div class="application-addon input-group-addon"><span class="glyphicon glyphicon-earphone"></span></div>
													      <input type="text" class="form-control" name="dept_tel" placeholder="* Telephone">
													    </div>
														</div>
														<div class="col-xs-12 col-sm-6">
															<div class="input-group sending-institution-grup">
													      <div class="application-addon input-group-addon"><span class="glyphicon glyphicon-print"></span></div>
													      <input type="text" class="form-control" name="dept_fax" placeholder=" Fax">
													    </div>
														</div>
														<div class="col-xs-12 col-sm-6">
															<div class="input-group sending-institution-grup">
													      <div class="application-addon input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
													      <input type="email" class="form-control" name="dept_email" placeholder="* e-mail">
													    </div>
														</div>
													</div>
											</fieldset>
										</div>
										<div class="col-xs-12">
											<fieldset>
												<legend class="label-title">* Institutional coordinator</legend>
													<div class="row">
														<div class="col-xs-12 col-sm-6">
															<div class="input-group sending-institution-grup">
													      <div class="application-addon input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
													      <input type="text" class="form-control" name="inst_name" placeholder="* Name">
													    </div>
														</div>
														<div class="col-xs-12 col-sm-6">
															<div class="input-group sending-institution-grup">
													      <div class="application-addon input-group-addon"><span class="glyphicon glyphicon-earphone"></span></div>
													      <input type="text" class="form-control" name="inst_tel" placeholder="* Telephone">
													    </div>
														</div>
														<div class="col-xs-12 col-sm-6">
															<div class="input-group sending-institution-grup">
													      <div class="application-addon input-group-addon"><span class="glyphicon glyphicon-print"></span></div>
													      <input type="text" class="form-control" name="inst_fax" placeholder=" Fax">
													    </div>
														</div>
														<div class="col-xs-12 col-sm-6">
															<div class="input-group sending-institution-grup">
													      <div class=" application-addon input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
													      <input type="email" class="form-control" name="inst_email" placeholder="* e-mail">
													    </div>
														</div>
													</div>
											</fieldset>
										</div>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<p class="subtitle2">Fields with * are required!</p>
											<p class="copyright-application">	&copy; 2016 Stuparu Mihai Iulian</p>
										</div>
										<div class="col-xs-12 col-sm-6"><a href="http://www.valahia.ro/en/" class="link-valahia" target="blank">http://www.valahia.ro</a></div>
									</div>
									
									<div class="row">
										<div class="col-xs-4">
											<a class="back btn btn-default" href=" <?php echo DIR ; ?>login" name="back"><span class="arrow glyphicon glyphicon-chevron-left"></span>Login</a>
										</div>
										<div class="col-xs-4">
											<span class="badge page_nr">Page 1/5</span>
										</div>
										<div class="col-xs-4">
											<a class="next first-next btn btn-default" href=" <?php echo DIR ; ?>application" name="first-next">Next<span class="arrow glyphicon glyphicon-chevron-right"></span></a>
										</div>
									</div>
								</div>
							</div> <!--row -->
						</div> <!-- first form end-->
						<div class="second-form">
							<p class="subtitle">Your Personal Information:</p>
							<div class="row">
								<div class="col-xs-12 col-sm-6">	
									<label class="application-label">
										<p class="label-title">* Family name</p>
										<div class="input-group">
											<div class="application-addon input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
											<input type="text" class="form-control" name="family_name" placeholder= "* Family name" value = "<?php echo $user['family_name']; ?>">
										</div>		
									</label>
									<label class="application-label">
										<p class="label-title">* Date of birth</p>
										<input type="text" class="form-control" name="birth_date" placeholder = "* Date of birth 'Y-m-d'" value = "<?php echo $user['birth_date']; ?>">
									</label>
									<div class="radio-second-form">
										<p class="label-title">* Sex</p>
										<label for="#radio-female" class="subtitle-radio">Male</label>
										<input type="radio" id="radio-female" name="sex" class="subtitle-rad" value = "Male">
										<label for="#radio-male" class="subtitle-radio">Female</label>
										<input type="radio" id="radio-male" name="sex" class="subtitle-rad" value = "Female">
									</div>
								</div> <!-- col-xs-12 col-sm-6-->
								<div class="col-xs-12 col-sm-6">
									<label class="application-label">
										<p class="label-title">* First name</p>
										<div class="input-group">
												<div class="application-addon input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
												<input type="text" class="form-control" name="first_name" placeholder = "* First name:" value = "<?php echo $user['first_name']; ?>">
										</div>
									</label>
									<label class="application-label">
										<p class="label-title">* Place of birth</p>
										<input type="text" class="form-control" name="birth_place" placeholder = "* Place of Birth:" value = "<?php echo $user['birth_place']; ?>">
									</label>
									<label class="application-label">
										<p class="label-title">* Nationality</p>
										<select class="input-medium bfh-countries form-control" data-country="US" name="country" value = "<?php echo $user['country']; ?>"></select>
									</label>
								</div>	<!-- col-xs-12 col-sm-6-->	
							</div> <!--row -->
							<div class="row">
								<div class="col-xs-12">
									<label class="application-label">
										<p class="label-title">* Address</p>
										<input class="form-control address_second_form" type="text" name="address" placeholder = "* Current address" value = "<?php echo $user['address']; ?>">
										<input class="form-control address_second_form" type="text" name="permanent_address" placeholder = "Permanent address (if different):" value = "<?php echo $user['permanent_address']; ?>">
										<input class="form-control address_second_form" type="text" name="address_valid_until" placeholder = "* Current address in valid until: 'Y-m-d'" value = "<?php echo $user['address_valid_until']; ?>">
									</label>
								</div>
								<div class="col-xs-6">
									<label>
										<p class="label-title">* Mobile</p>
										<div class="input-group sending-institution-grup">
								      <div class="application-addon input-group-addon"><span class="glyphicon glyphicon-phone"></span></div>
								      <input class="form-control" type="text" name="mobile" placeholder = "* mobile" value = "<?php echo $user['mobile']; ?>">
								    </div>
									</label>
								</div>
								<div class="col-xs-6">
									<label>
										<p class="label-title">* Passport Id card</p>
										<div class="input-group sending-institution-grup">
								      <div class="application-addon input-group-addon"><span class="glyphicon glyphicon-plane"></span></div>
								      <input class="form-control" type="text" name="passport_id" placeholder = "* passport Id card:" value = "<?php echo $user['passport_id']; ?>">
								    </div>
									</label>
								</div>
								<div class="col-xs-12">
									<label>
										<p class="label-title">* E-mail address</p>
										<div class="input-group sending-institution-grup">
								      <div class="application-addon input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
								      <input class="form-control" type="email" name="email" placeholder = "* valahia@example.com" value = "<?php echo $user['email']; ?>">
								    </div>
									</label>
								</div>
								<div class="col-xs-12">
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<p class="subtitle2">Fields with * are required!</p>
											<p class="copyright-application">	&copy; 2016 Stuparu Mihai Iulian</p>
										</div>
										<div class="col-xs-12 col-sm-6"><a href="http://www.valahia.ro/en/" class="link-valahia" target="blank">http://www.valahia.ro</a></div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<a class="back second-back btn btn-default" href=" <?php echo DIR ; ?>application" name="second-back"><span class="arrow glyphicon glyphicon-chevron-left"></span>Back</a>
										</div>
										<div class="col-xs-4">
											<span class="badge page_nr">Page 2/5</span>
										</div>						
										<div class="col-xs-4">
											<a class="next second-next btn btn-default" href=" <?php echo DIR ; ?>application" name="second-next">Next<span class="arrow glyphicon glyphicon-chevron-right"></span></a>
										</div>
									</div>
								</div>
							</div> <!--row -->
						</div> <!-- second form -->
						<div class="third-form"> <!-- third form start -->
							<div class="row">					
								<div class="col-xs-12">
									<p class="subtitle">Language competence:</p>
								</div>
								<div class="col-xs-12">
									<label class="application-label">
										<p class="label-title">* Mother language</p>   
								    <input class="form-control" type="text" name="mother_language" placeholder= "* Mother language:">
									</label>
									<label class="application-label">
										<p class="label-title">Language of instruction at home institution(if different)</p>   
								    <input class="form-control" type="text" name="institution_language" placeholder= " Language of instruction at home institution(if different):">
									</label>
								</div>
								<div class="col-xs-12">
									<table class="first-table">
										<tr>
											<th>
												<p class="hidden-xs">Other languages</p>
												<p class="xs-language hidden-sm hidden-md hidden-lg">Other languages</p>
											</th>
											<th>
												<p class="hidden-xs">I am currently studying this language</p>
												<p class="xs-language hidden-sm hidden-md hidden-lg">I am currently studying this language</p>
											</th>
											<th>
												<p class="hidden-xs">I have sufficient knowledge to follow lectures</p>
												<p class="xs-language hidden-sm hidden-md hidden-lg">I have sufficient knowledge to follow lectures</p>
											</th>
											<th>
												<p class="hidden-xs">I would have sufficient knowledge to follow lectures if I had some extra preparation</p>
												<p class="xs-language hidden-sm hidden-md hidden-lg">I would have sufficient knowledge to follow lectures if I had some extra preparation</p>
											</th>
										</tr>
										<tr>
											<td>
												<p class="language">English</p>
											</td>
											<td>
												<div class="radio">
													<label><input type="radio" name="studying_lang1" checked="checked" value="yes">yes</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="studying_lang1" value="no">no</label>
												</div>
											</td>
											<td>
												<div class="radio"> 
													<label><input type="radio" name="knowledge_lang1" checked="checked" value="yes">yes</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="knowledge_lang1" value="no">no</label>
												</div>
											</td>
											<td>
												<div class="radio">
													<label><input type="radio" name="preparation_lang1" checked="checked" value="yes">yes</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="preparation_lang1" value="no">no</label>
												</div>
											</td>
										</tr>	
										<tr>
											<td>
												<p class="language">French</p>
											</td>
											<td>
												<div class="radio">
													<label><input type="radio" name="studying_lang2" checked="checked" value="yes">yes</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="studying_lang2" value="no">no</label>
												</div>
											</td>
											<td>
												<div class="radio">
													<label><input type="radio" name="knowledge_lang2" checked="checked" value="yes">yes</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="knowledge_lang2" value="no">no</label>
												</div>
											</td>
											<td>
												<div class="radio">
													<label><input type="radio" name="preparation_lang2" checked="checked" value="yes">yes</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="preparation_lang2" value="no">no</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<p class="language">Spanish</p>
											</td>
											<td>
												<div class="radio">
													<label><input type="radio" name="studying_lang3" checked="checked" value="yes">yes</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="studying_lang3" value="no">no</label>
												</div>
											</td>
											<td>
												<div class="radio">
													<label><input type="radio" name="knowledge_lang3" checked="checked" value="yes">yes</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="knowledge_lang3" value="no">no</label>
												</div>
											</td>
											<td>
												<div class="radio">
													<label><input type="radio" name="preparation_lang3" checked="checked" value="yes">yes</label>
												</div>
												<div class="radio">
													<label><input type="radio" name="preparation_lang3" value="no">no</label>
												</div>
											</td>
										</tr>
									</table>
								</div> <!-- col-->
								<div class="col-xs-12">
									<textarea class="reasons form-control" name="application_reasons" id="" cols="12" rows="3" value="<?php echo $user["application_reasons"] ?>">Briefly state the reasons why you wish to study abroad?</textarea>
								</div>
								<div class="col-xs-12">
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<p class="subtitle2">Fields with * are required!</p>
											<p class="copyright-application">	&copy; 2016 Stuparu Mihai Iulian</p>
										</div>
										<div class="col-xs-12 col-sm-6"><a href="http://www.valahia.ro/en/" class="link-valahia" target="blank">http://www.valahia.ro</a></div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<a class="back third-back btn btn-default" href=" <?php echo DIR ; ?>application" name="third-back"><span class="arrow glyphicon glyphicon-chevron-left"></span>Back</a>
										</div>
										<div class="col-xs-4">
											<span class="badge page_nr">Page 3/5</span>
										</div>
										<div class="col-xs-4">
											<a class="next third-next btn btn-default" href=" <?php echo DIR ; ?>application" name="third-next">Next<span class="arrow glyphicon glyphicon-chevron-right"></span></a>
										</div>
									</div>
								</div>
							</div> <!-- row-->
						</div> <!--third form end-->				
						<div class="fourth-form"> <!--fourth form start-->
							<div class="row">
								<div class="col-xs-12">
									<p class="subtitle">Work experience related to current study (if relevant):</p>
									<table class="second-table">
										<tr>
											<th>Type of work experience</th>
											<th>Firm / organisation</th>
											<th>Dates</th>
											<th>Country</th>
										</tr>
										<tr>
											<td>
												<textarea class="textarea-experience" name="experience_type" cols="2" rows="3"></textarea>
											</td>
											<td>
												<textarea class="textarea-experience" name="firm" cols="2" rows="3"></textarea>
											</td>
											<td>
												<textarea class="textarea-experience" name="dates" cols="2" rows="3"></textarea>
											</td>
											<td>
												<textarea class="textarea-experience" name="country_exp" cols="2" rows="3"></textarea>
											</td>
										</tr>
									</table>
									<p class="subtitle">Previous and current study:</p>
									<label>
										<p class="label-title">* Diploma/degree for which you are currently studying</p>
										<div class="input-group sending-institution-grup">
								      <div class="application-addon input-group-addon"><span class="glyphicon glyphicon-education"></span></div>
								      <input class="form-control" type="text" name="diploma" placeholder= "* Diploma/degree for which you are currently studying">
								    </div>
									</label>
									<label>
										<p class="label-title">* Number of higher education study years prior to departure abroad</p>
								    <input class="form-control" type="text" name="study_years" placeholder= "* Number of higher education study years prior to departure abroad">
									</label>
									<div class="radio-fourth-form">
										<p class="label-title">Have you already been studying abroad ?</p>
										<label for="#radio-yes" class="subtitle-radio">Yes</label>
										<input type="radio" id="radio-yes" name="abroad_study" class="subtitle-rad" value="yes">
										<label for="#radio-no" class="subtitle-radio">No</label>
										<input type="radio" id="radio-no" name="abroad_study" class="subtitle-rad" value="no" checked="checked">
									</div>
									<input class="form-control abroad_hide" type="text" name="abroad_institute" placeholder= " If Yes, when ? at which institution ?">				
									<div class="col-xs-12">
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<p class="subtitle2">Fields with * are required!</p>
												<p class="copyright-application">	&copy; 2016 Stuparu Mihai Iulian</p>
											</div>
											<div class="col-xs-12 col-sm-6"><a href="http://www.valahia.ro/en/" class="link-valahia" target="blank">http://www.valahia.ro</a></div>
										</div>
										<div class="row">
											<div class="col-xs-4">
												<a class="back fourth-back btn btn-default" href=" <?php echo DIR ; ?>application" name="fourth-back"><span class="arrow glyphicon glyphicon-chevron-left"></span>Back</a>
											</div>
											<div class="col-xs-4">
												<span class="badge page_nr">Page 4/5</span>
											</div>
											<div class="col-xs-4">
												<a class="next fourth-next btn btn-default" href=" <?php echo DIR ; ?>application" name="fourth-next">Next<span class="arrow glyphicon glyphicon-chevron-right"></span></a>
											</div>
										</div>
									</div>
								</div> <!-- col -->
							</div> <!-- row -->
						</div> <!-- fourth-form-end -->
						<div class="fifth-form"> <!--fifth-form-start-->
							<div class="row">
								<div class="col-xs-12">
									<p class="subtitle">* Required documents:</p>
									<input type="file" class="filestyle" id="filestyle-1" tabindex="-1" name="foto">
									<div class="bootstrap-filestyle input-group">
										<input type="text" class="form-control " placeholder="* Upload foto" disabled=""> 
										<span class="group-span-filestyle input-group-btn" tabindex="0">
											<label for="filestyle-1" class="btn btn-primary file-label">
												<span class="glyphicon glyphicon-folder-open"></span> 
												<span class="buttonText"> Browse file</span>
											</label>
										</span>
									</div>
									<input type="file" class="filestyle" id="filestyle-2" tabindex="-1" name="resume">
									<div class="bootstrap-filestyle input-group">
										<input type="text" class="form-control " placeholder="* Upload resume" disabled=""> 
										<span class="group-span-filestyle input-group-btn" tabindex="0">
											<label for="filestyle-2" class="btn btn-primary file-label">
												<span class="glyphicon glyphicon-folder-open"></span> 
												<span class="buttonText"> Browse file</span>
											</label>
										</span>
									</div>
									<input type="file" class="filestyle" id="filestyle-3" tabindex="-1" name="school_situation">
									<div class="bootstrap-filestyle input-group">
										<input type="text" class="form-control " placeholder="* School situation" disabled=""> 
										<span class="group-span-filestyle input-group-btn" tabindex="0">
											<label for="filestyle-3" class="btn btn-primary file-label">
												<span class="glyphicon glyphicon-folder-open"></span> 
												<span class="buttonText"> Browse file</span>
											</label>
										</span>
									</div>
									<input type="file" class="filestyle" id="filestyle-4" tabindex="-1" name="identity_card">
									<div class="bootstrap-filestyle input-group">
										<input type="text" class="form-control " placeholder="* Scanned identity card" disabled=""> 
										<span class="group-span-filestyle input-group-btn" tabindex="0">
											<label for="filestyle-4" class="btn btn-primary file-label">
												<span class="glyphicon glyphicon-folder-open"></span> 
												<span class="buttonText"> Browse file</span>
											</label>
										</span>
									</div>
									<input type="file" class="filestyle" id="filestyle-5" tabindex="-1" name="other_files">
									<div class="bootstrap-filestyle input-group">
										<input type="text" class="form-control " placeholder="Other files" disabled=""> 
										<span class="group-span-filestyle input-group-btn" tabindex="0">
											<label for="filestyle-5" class="btn btn-primary file-label">
												<span class="glyphicon glyphicon-folder-open"></span> 
												<span class="buttonText"> Browse file</span>
											</label>
										</span>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="subtitle">* Account password:</p>
										</div>
										<div class="div_password col-xs-12 col-sm-6">
											<input class="form-control" type="password" name="password" placeholder= "* Account password" value="<?php echo $user['password']; ?>">
										</div>
										<div class="div_password col-xs-12 col-sm-6">
											<input class="form-control" type="password" name="rpassword" placeholder= "* Repeat password">
										</div>
									</div>						
								</div>
								<div class="col-xs-12">
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<p class="subtitle2">Fields with * are required!</p>
											<p class="copyright-application">	&copy; 2016 Stuparu Mihai Iulian</p>
										</div>
										<div class="col-xs-12 col-sm-6"><a href="http://www.valahia.ro/en/" class="link-valahia" target="blank">http://www.valahia.ro</a></div>
									</div>
									<div class="row">
										<div class="col-xs-4">
											<a class="back fifth-back btn btn-default" href=" <?php echo DIR ; ?>application" name="fifth-back"><span class="arrow glyphicon glyphicon-chevron-left"></span>Back</a>
										</div>
										<div class="col-xs-4">
											<span class="badge page_nr">Page 5/5</span>
										</div>
										<div class="col-xs-4">
											<button class="next btn btn-default" type="submit" name="submit">Submit</button>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- fifth-form-end -->
					</form> <!-- form -->
				</div> <!-- class form-->
			</div> <!-- col -->
			<div class="xs-hidden col-md-3 col-sm-2"></div>
		</div>	<!-- row -->
	</div> <!-- container -->
</div> <!-- application-form-->