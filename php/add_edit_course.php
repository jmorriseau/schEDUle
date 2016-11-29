<h1>Add/Edit Course</h1>

<form>
  <div class="form-row">
    <label>Course Name:</label>
    <input type="text" />
  </div>
  <div class="form-row">
    <label>Course Number:</label>
    <input type="text" value=""/>
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
    <label>Credit Hours:</label>
    <input type="number" min="0" max="5"/>
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
    <button class="btn btn-default" onclick="loadPage('course')">Cancel</button>
    <button class="btn btn-success" onclick="loadPage('course')">Save</button>
  </div>
</form>
