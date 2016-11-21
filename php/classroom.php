<button class="btn" onclick="launchModal('.edit-classroom','add_edit_building')">Test model edit</button>

<div class="modal-container edit-classroom">
  <div class="modal-header">
    Edit Classroom
  </div>
  <div class="modal-body">
  </div>
  <div class="modal-footer">
    <button class="pull-right" onclick="closeModal('.edit-classroom')">Close</button>
  </div>
</div>

<h1>Current Classrooms</h1>

<!-- <form>
  <div class="form-row">
    <label>Campus:</label>
    <select>
      <option value="">--Choose One--</option>
      <option value="access_road">Access Road</option>
      <option value="east_greenwich">East Greenwich</option>
      <option value="post_road">Post Road</option>
    </select>
  </div>
  <div class="form-row">
    <label>Building:</label>
    <select>
      <option value="">--Choose One--</option>
      <option value="main_building">Main Building</option>
      <option value="east_building">East Building</option>
      <option value="west_building">West Building</option>
    </select>
  </div>
  <div class="form-row">
    <label>Campus:</label>
    <select>
      <option value="">--Choose One--</option>
      <option value="floor_one">Frist Floor</option>
      <option value="floor_two">Second Floor</option>
      <option value="floor_three">Third Floor</option>
    </select>
  </div>
</form> -->

<div class="classroom-container content-container">
  <div class="classroom-selector select-campus">
    <label>Select a campus:</label>
    <select onchange="updateClassroomSelect('.select-campus','.select-building')">
      <option value="">--Choose One--</option>
      <option value="access_road">Access Road</option>
      <option value="east_greenwich">East Greenwich</option>
      <option value="post_road">Post Road</option>
    </select>
  </div>

  <div class="classroom-selector select-building">
    <label>Select a building:</label>
    <select onchange="updateClassroomSelect('.select-building','.select-floor')">
      <option value="">--Choose One--</option>
      <option value="main_building">Main Building</option>
      <option value="east_building">East Building</option>
      <option value="west_building">West Building</option>
    </select>
  </div>

  <div class="classroom-selector select-floor">
    <label>Select a floor:</label>
    <select onchange="updateClassroomSelect('.select-floor')">
      <option value="">--Choose One--</option>
      <option value="floor_one">Frist Floor</option>
      <option value="floor_two">Second Floor</option>
      <option value="floor_three">Third Floor</option>
    </select>
  </div>
</div>
