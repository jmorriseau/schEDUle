<h1>Add/Edit Building</h1>

<form>
  <div class="form-row">
    <label>Building Name:</label>
    <input type="text" />
  </div>
  <div class="form-row">
    <label>Campus</label>
    <select>
      <option value="">--Choose One--</option>
      <option value="access_road">Access Road</option>
      <option value="east_greenwich">East Greenwich</option>
      <option value="post_road">Post Road</option>
    </select>
  </div>
  <div class="form-row">
    <label>Address:</label>
    <textarea readonly="readonly"></textarea>
  </div>
  <div class="form-row">
    <label></label>
    <button class="btn btn-default" onclick="loadPage('building')">Cancel</button>
    <button class="btn btn-success" onclick="loadPage('building')">Save</button>
  </div>
</form>
