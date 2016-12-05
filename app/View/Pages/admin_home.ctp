<div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            <div class="text-center">
              <a class="quick-btn" href="#">
                <i class="fa fa-bolt fa-2x"></i>
                <span>default</span> 
                <span class="label label-default">2</span> 
              </a> 
              <a class="quick-btn" href="#">
                <i class="fa fa-check fa-2x"></i>
                <span>danger</span> 
                <span class="label label-danger">2</span> 
              </a> 
              <a class="quick-btn" href="#">
                <i class="fa fa-building-o fa-2x"></i>
                <span>No Label</span> 
              </a> 
              <a class="quick-btn" href="#">
                <i class="fa fa-envelope fa-2x"></i>
                <span>success</span> 
                <span class="label label-success">-456</span> 
              </a> 
              <a class="quick-btn" href="#">
                <i class="fa fa-signal fa-2x"></i>
                <span>warning</span> 
                <span class="label label-warning">+25</span> 
              </a> 
              <a class="quick-btn" href="#">
                <i class="fa fa-external-link fa-2x"></i>
                <span>π</span> 
                <span class="label btn-metis-2">3.14159265</span> 
              </a> 
              <a class="quick-btn" href="#">
                <i class="fa fa-lemon-o fa-2x"></i>
                <span>é</span> 
                <span class="label btn-metis-4">2.71828</span> 
              </a> 
              <a class="quick-btn" href="#">
                <i class="fa fa-glass fa-2x"></i>
                <span>φ</span> 
                <span class="label btn-metis-3">1.618</span> 
              </a> 
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-8">
                <div class="box">
                  <header>
                    <h5>Line Chart</h5>
                  </header>
                  <!-- CHARTS -->
					<div class="body" id="trigo" style="height: 250px; padding: 0px; position: relative;">
					  <canvas class="flot-base" width="684" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 684px; height: 250px;"></canvas>
					  <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
						<div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
						  <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 85px; top: 232px; left: 23px; text-align: center;">0</div>
						  <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 85px; top: 232px; left: 119px; text-align: center;">2</div>
						  <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 85px; top: 232px; left: 216px; text-align: center;">4</div>
						  <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 85px; top: 232px; left: 312px; text-align: center;">6</div>
						  <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 85px; top: 232px; left: 408px; text-align: center;">8</div>
						  <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 85px; top: 232px; left: 501px; text-align: center;">10</div>
						  <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 85px; top: 232px; left: 598px; text-align: center;">12</div>
						</div>
						<div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
						  <div class="flot-tick-label tickLabel" style="position: absolute; top: 201px; left: 2px; text-align: right;">-1.0</div>
						  <div class="flot-tick-label tickLabel" style="position: absolute; top: 155px; left: 2px; text-align: right;">-0.5</div>
						  <div class="flot-tick-label tickLabel" style="position: absolute; top: 110px; left: 6px; text-align: right;">0.0</div>
						  <div class="flot-tick-label tickLabel" style="position: absolute; top: 64px; left: 6px; text-align: right;">0.5</div>
						  <div class="flot-tick-label tickLabel" style="position: absolute; top: 18px; left: 6px; text-align: right;">1.0</div>
						</div>
					  </div>
					  <canvas class="flot-overlay" width="684" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 684px; height: 250px;"></canvas>
					  <div class="legend">
						<div style="position: absolute; width: 46px; height: 32px; top: 13px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div>
						<table style="position:absolute;top:13px;right:13px;;font-size:smaller;color:#545454">
						  <tbody>
							<tr>
							  <td class="legendColorBox">
								<div style="border:1px solid #ccc;padding:1px">
								  <div style="width:4px;height:0;border:5px solid #4572A7;overflow:hidden"></div>
								</div>
							  </td>
							  <td class="legendLabel">sin(x)</td>
							</tr>
							<tr>
							  <td class="legendColorBox">
								<div style="border:1px solid #ccc;padding:1px">
								  <div style="width:4px;height:0;border:5px solid #AA4643;overflow:hidden"></div>
								</div>
							  </td>
							  <td class="legendLabel">cos(x)</td>
							</tr>
						  </tbody>
						</table>
					  </div>
					</div>

                  <!-- /CHARTS -->
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box">
                  <div class="body">
                    <table class="table table-condensed table-hovered sortableTable tablesorter tablesorter-default" role="grid">
                      <thead>
                        <tr role="row" class="tablesorter-headerRow">
                          <th data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" unselectable="on" aria-sort="none" aria-label="Country
                            
                          : No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">Country
                            <i class="fa sort"></i>
                          </div></th>
                          <th data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" unselectable="on" aria-sort="none" aria-label="Visit
                            
                          : No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">Visit
                            <i class="fa sort"></i>
                          </div></th>
                          <th data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" unselectable="on" aria-sort="none" aria-label="Time
                            
                          : No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">Time
                            <i class="fa sort"></i>
                          </div></th>
                        </tr>
                      </thead>
                      <tbody aria-live="polite" aria-relevant="all">
                        <tr class="active" role="row">
                          <td>Andorra</td>
                          <td>1126</td>
                          <td>00:00:15</td>
                        </tr>
                        <tr role="row">
                          <td>Belarus</td>
                          <td>350</td>
                          <td>00:01:20</td>
                        </tr>
                        <tr class="danger" role="row">
                          <td>Paraguay</td>
                          <td>43</td>
                          <td>00:00:30</td>
                        </tr>
                        <tr class="warning" role="row">
                          <td>Malta</td>
                          <td>547</td>
                          <td>00:10:20</td>
                        </tr>
                        <tr role="row">
                          <td>Australia</td>
                          <td>560</td>
                          <td>00:00:10</td>
                        </tr>
                        <tr role="row">
                          <td>Kenya</td>
                          <td>97</td>
                          <td>00:20:00</td>
                        </tr>
                        <tr class="success" role="row">
                          <td>Italy</td>
                          <td>2450</td>
                          <td>00:10:00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
      <div id="right" class="bg-light lter">
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Warning!</strong>  Best check yo self, you're not looking too good.
        </div>

        <!-- .well well-small -->
        <div class="well well-small dark">
          <ul class="list-unstyled">
            <li>Visitor <span class="inlinesparkline pull-right"><canvas width="21" height="16" style="display: inline-block; width: 21px; height: 16px; vertical-align: top;"></canvas></span> 
            </li>
            <li>Online Visitor <span class="dynamicsparkline pull-right"><canvas width="21" height="16" style="display: inline-block; width: 21px; height: 16px; vertical-align: top;"></canvas></span> 
            </li>
            <li>Popularity <span class="dynamicbar pull-right"><canvas width="34" height="16" style="display: inline-block; width: 34px; height: 16px; vertical-align: top;"></canvas></span> 
            </li>
            <li>New Users <span class="inlinebar pull-right"><canvas width="29" height="16" style="display: inline-block; width: 29px; height: 16px; vertical-align: top;"></canvas></span> 
            </li>
          </ul>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <button class="btn btn-block">Default</button>
          <button class="btn btn-primary btn-block">Primary</button>
          <button class="btn btn-info btn-block">Info</button>
          <button class="btn btn-success btn-block">Success</button>
          <button class="btn btn-danger btn-block">Danger</button>
          <button class="btn btn-warning btn-block">Warning</button>
          <button class="btn btn-inverse btn-block">Inverse</button>
          <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
          <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
          <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
          <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
          <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
          <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <span>Default</span> <span class="pull-right"><small>20%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-info" style="width: 20%"></div>
          </div>
          <span>Success</span> <span class="pull-right"><small>40%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-success" style="width: 40%"></div>
          </div>
          <span>warning</span> <span class="pull-right"><small>60%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
          </div>
          <span>Danger</span> <span class="pull-right"><small>80%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
          </div>
        </div>
      </div><!-- /#right -->
