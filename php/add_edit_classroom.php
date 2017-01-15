<h1>Add/Edit Classroom</h1>
<hr/>
<form>
<div class="form-container edit-classroom-container">
  <div class="form-row">
    <label>Building Name:</label>
    <select>
      <option value="access_road" selected="selected">Main Building</option>
    </select>
  </div>
  <div class="form-row">
    <label>Room Number:</label>
    <input type="text" value="N210"/>
  </div>
  <div class="form-row">
    <label>Classroom Type:</label>
    <select>
      <option value="">--Choose One--</option>
      <option value="hall">Hall</option>
      <option value="lab" selected="selected">Lab</option>
      <option value="lecture">Lecture</option>
    </select>
  </div>
  <div class="form-row">
    <label>Room Capacity:</label>
    <input type="number" min="0" max="30"/>
  </div>
  <div class="form-row">
    <div class="accordian-container collapsed">
      <div class="accordian-header" onclick="toggleAccordian(this)">
        <span class="fa fa-plus"></span>
        Software
      </div>
      <div class="accordian-body">
        Photoshop etc
      </div>
    </div>

    <div class="accordian-container collapsed">
      <div class="accordian-header" onclick="toggleAccordian(this)">
        <span class="fa fa-plus"></span>
        Hardware
      </div>
      <div class="accordian-body">
        Desk etc
      </div>
    </div>
  </div>
  <div class="form-row">
    <label></label>
    <button class="btn btn-default" onclick="loadPage('classroom')">Cancel</button>
    <button class="btn btn-success" onclick="loadPage('classroom')">Save</button>
  </div>
</div>
</form>
