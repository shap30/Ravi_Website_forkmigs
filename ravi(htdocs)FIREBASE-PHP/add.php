<!--USERCLIENT -->

<script src="./addPageComponents/addscript.js"></script>

<form method="post" action="action_add.php">
  <table>

    <!-- Initial Contact Inputs -->
    <tr>
      <td colspan="2">
        <table>
          <tr>
            <th>INITIAL CONTACT DETAILS (Architect/ID)</th>
          </tr>

          <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="initial_name" class="input" placeholder="Full Name" required></td>
          </tr>

          <tr>
            <td>Mobile No</td>
            <td>:</td>
            <td><input type="text" name="initial_contactnumber" class="input" pattern="09\d{9}"
                title="Please enter 11 digits start with 09" placeholder="09XXXXXXX" required></td>
      </td>
    </tr>

    <tr>
      <td>Address</td>
      <td>:</td>
      <td><input type="text" name="initial_address" class="input" placeholder="Complete Address" required></td>
    </tr>

    <tr>
      <td>% ID Prof. Fee or Fixed PF Amount</td>
      <td>:</td>
      <td><input type="text" name="initial_idprofFee" class="input" placeholder="ex. XXX,XXX" required></td>
    </tr>
  </table>
  </td>

  <td colspan="2">
    <table>
      <tr>
        <td><input type="radio" id="projmanager" name="initial" value="p1">
          <label for="projmanager" class="checkbox-text">PROJ MANAGER</label>
        </td>
        <td><input type="radio" id="timekeeper" name="initial" value="p2">
          <label for="timekeeper" class="checkbox-text">TIMEKEEPER</label>
        </td>
      </tr>
      <tr>
        <td><input type="radio" id="projengineer" name="initial" value="p3">
          <label for="projengineer" class="checkbox-text">PROJ ENGINEER</label>
        </td>
        <td><input type="radio" id="initial_foreman" name="initial" value="p4">
          <label for="foreman" class="checkbox-text">FOREMAN</label>
      </tr>
      <tr>
        <td><input type="radio" id="architect" name="initial" value="p5">
          <label for="architect" class="checkbox-text">ARCHITECT</label>
        </td>
        <td><input type="radio" id="int_designer_I" name="initial" value="p6">
          <label for="int_designer" class="checkbox-text">INT. DESIGNER</label>
        </td>
      </tr>
      <tr>
        <td><input type="radio" id="others_I" name="initial" value="p7">
          <label for="others" class="checkbox-text">OTHERS: PLS SPECIFY</label>
        </td>
        <td>
          <input type="text" class="othersField" id="initial_field" name="initial_profession" required>
        </td>
      </tr>
    </table>
  </td>
  </tr>


  <!-- Primary Contact Inputs -->
  <tr>
    <td colspan="2">
      <table>
        <tr>
          <th>PRIMARY CONTACT DETAILS (Architect/ID)</th>
        <tr>
          <td>Name</td>
          <td>:</td>
          <td><input type="text" name="primary_name" class="input" placeholder="Full Name" required></td>
    </td>
  </tr>
  <tr>
    <td>Mobile No</td>
    <td>:</td>
    <td><input type="text" name="primary_contactnumber" class="input" pattern="09\d{9}"
        title="Please enter 11 digits start with 09" placeholder="09XXXXXXX" required></td>
    </td>
  </tr>
  <tr>
    <td>Address</td>
    <td>:</td>
    <td><input type="text" name="primary_address" class="input" placeholder="Complete Address" required></td>
  </tr>
  <tr>
    <td>% ID Prof. Fee or Fixed PF Amount</td>
    <td>:</td>
    <td><input type="text" name="primary_idprofFee" class="input" placeholder="ex. XXX,XXX" required></td>
  </tr>
  </table>
  </td>

  <td colspan="2">
    <table>
      <tr>
        <td><input type="radio" id="projmanager" name="primary" value="p1">
          <label for="projmanager" class="checkbox-text">PROJ MANAGER</label>
        </td>
        <td><input type="radio" id="timekeeper" name="primary" value="p2">
          <label for="timekeeper" class="checkbox-text">TIMEKEEPER</label>
        </td>
      </tr>
      <tr>
        <td><input type="radio" id="projengineer" name="primary" value="p3">
          <label for="projengineer" class="checkbox-text">PROJ ENGINEER</label>
        </td>
        <td><input type="radio" id="initial_foreman" name="primary" value="p4">
          <label for="foreman" class="checkbox-text">FOREMAN</label>
      </tr>
      <tr>
        <td><input type="radio" id="architect" name="primary" value="p5">
          <label for="architect" class="checkbox-text">ARCHITECT</label>
        </td>
        <td><input type="radio" id="int_designer_I" name="primary" value="p6">
          <label for="int_designer" class="checkbox-text">INT. DESIGNER</label>
        </td>
      </tr>
      <tr>
        <td><input type="radio" id="others_I" name="primary" value="p7">
          <label for="others" class="checkbox-text">OTHERS: PLS SPECIFY</label>
        </td>
        <td>
          <input type="text" class="othersField" id="primary_field" name="primary_profession" required>
        </td>
      </tr>
    </table>
  </td>
  </tr>

  <!-- Main Contact Inputs -->
  <tr>
    <td colspan="2">
      <table>
        <tr>
          <th>MAIN CONTACT (OWNER)</th>
        <tr>
          <td>Name</td>
          <td>:</td>
          <td><input type="text" name="owner_name" class="input" placeholder="Full Name" required></td>
        </tr>
        <tr>
          <td>Mobile No</td>
          <td>:</td>
          <td><input type="text" name="owner_contactnumber" class="input" pattern="09\d{9}"
              title="Please enter 11 digits start with 09" placeholder="09XXXXXXX" required></td>
        </tr>
        <tr>
          <td>Address</td>
          <td>:</td>
          <td><input type="text" name="owner_address" class="input" placeholder="Complete Address" required></td>
        </tr>
        <tr>
          <td>% ID Prof. Fee or Fixed PF Amount</td>
          <td>:</td>
          <td><input type="text" name="owner_idprofFee" class="input" placeholder="ex. XXX,XXX" required></td>
        </tr>
      </table>
    </td>

    <td colspan="2">
      <table>
        <tr>
          <td><input type="radio" id="projmanager" name="owner" value="p1">
            <label for="projmanager" class="checkbox-text">PROJ MANAGER</label>
          </td>
          <td><input type="radio" id="timekeeper" name="owner" value="p2">
            <label for="timekeeper" class="checkbox-text">TIMEKEEPER</label>
          </td>
        </tr>
        <tr>
          <td><input type="radio" id="projengineer" name="owner" value="p3">
            <label for="projengineer" class="checkbox-text">PROJ ENGINEER</label>
          </td>
          <td><input type="radio" id="initial_foreman" name="owner" value="p4">
            <label for="foreman" class="checkbox-text">FOREMAN</label>
        </tr>
        <tr>
          <td><input type="radio" id="architect" name="owner" value="p5">
            <label for="architect" class="checkbox-text">ARCHITECT</label>
          </td>
          <td><input type="radio" id="int_designer_I" name="owner" value="p6">
            <label for="int_designer" class="checkbox-text">INT. DESIGNER</label>
          </td>
        </tr>
        <tr>
          <td><input type="radio" id="others_I" name="owner" value="p7">
            <label for="others" class="checkbox-text">OTHERS: PLS SPECIFY</label>
          </td>
          <td>
            <input type="text" class="othersField" id="owner_field" name="owner_profession" required>
          </td>
        </tr>
      </table>
    </td>
  </tr>

  <!-- Project Specifications Inputs -->

  <tr>
    <th> SPECIFICATIONS: </th>
  </tr>
  <tr>
    <td>Main Kitchen</td>
    <td>:</td>
    <td>
      <table>
        <tr>
          <td><input type="radio" id="aux_kitchen" name="kitchen" value="k1">
            <label for="aux_kitchen" class="checkbox-text">AUX. KITCHEN</label>
          </td>
          <td><input type="radio" id="vanity" name="kitchen" value="k2">
            <label for="vanity" class="checkbox-text">VANITY</label>
          </td>
        </tr>
        <tr>
          <td><input type="radio" id="office" name="kitchen" value="k3">
            <label for="office" class="checkbox-text">OFFICE</label>
          </td>
          <td><input type="radio" id="closet" name="kitchen" value="k4">
            <label for="closet" class="checkbox-text">CLOSET</label>
          </td>
        </tr>
        <tr>
          <td><input type="radio" id="entertainment" name="kitchen" value="k5">
            <label for="entertainment" class="checkbox-text">ENTERTAINMENT</label>
          </td>
          <td><input type="radio" id="others_S" name="kitchen" value="k6">
            <label for="others_S" class="checkbox-text">OTHERS: PLS SPECIFY</label>
          </td>
          <td>
            <input type="text" class="othersField" id="kitchen_field" name="kitchen_field" required>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>Door Front</td>
    <td><input type="text" name="doorfront" class="input" placeholder="" required></td>
    <td>Door Front Finish</td>
    <td><input type="text" name="doorfront_Finish" placeholder="" required></td>
  </tr>
  <tr>
    <td>Counter Top</td>
    <td><input type="text" name="countertop" class="input" placeholder="" required></td>
    <td>Handle</td>
    <td><input type="text" name="handle" class="input" placeholder="" required></td>
  </tr>
  <tr>
    <td>Oven Type</td>
    <td>
      <table>
        <tr>
          <td>
            <input type="radio" id="built_in" name="ovenType" value="t1">
            <label for="built_in" class="checkbox-text">BUILT IN</label>
          </td>
          <td>
            <input type="radio" id="free_standing" name="ovenType" value="t2">
            <label for="free_standing" class="checkbox-text">FREE STANDING</label>
          </td>
          <td>
            <input type="text" class="othersField" id="oven_type" name="oven_type" required>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>Oven</td>
    <td><input type="text" name="width_Oven" class="input" placeholder="ex. XXmm (unit in MM)" required>
      <label class="checkbox-text">WIDTH</label>
    </td>
    <td><input type="text" name="depth_Oven" class="input" placeholder="ex. XXmm (unit in MM)" required>
      <label class="checkbox-text">DEPTH</label>
    </td>
    <td><input type="text" name="height_Oven" class="input" placeholder="ex. XXmm (unit in MM)" required>
      <label class="checkbox-text">HEIGHT</label>
    </td>
  </tr>
  <tr>
    <td>Cooktop</td>
    <td>
      <input type="text" name="width_Cooktop" class="input" placeholder="ex. XXmm (unit in MM)" required>
      <label class="checkbox-text">WIDTH</label>
    </td>
    <td><input type="text" name="depth_Cooktop" class="input" placeholder="ex. XXmm (unit in MM)" required>
      <label class="checkbox-text">DEPTH</label>
    </td>
    <td><input type="text" name="height_Cooktop" class="input" placeholder="ex. XXmm (unit in MM)" required>
      <label class="checkbox-text">HEIGHT</label>
    </td>
  </tr>
  <tr>
    <td>Range</td>
    <td>
      <table>
        <tr>
          <td>
            <input type="radio" id="built_in" name="rangeType" value="t1">
            <label for="built_in" class="checkbox-text">BUILT IN</label>
          </td>
          <td>
            <input type="radio" id="free_standing" name="rangeType" value="t2">
            <label for="free_standing" class="checkbox-text">FREE STANDING</label>
          </td>
          <td>
            <input type="text" class="othersField" id="range_type" name="range_type" required>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>Range Hood</td>
    <td>
      <table>
        <tr>
          <td>
            <input type="radio" id="duct_type" name="rangeHoodType" value="r1">
            <label for="duct_type" class="checkbox-text">DUCT TYPE</label>
          </td>
          <td>
            <input type="radio" id="filter_type" name="rangeHoodType" value="r2">
            <label for="filter_type" class="checkbox-text">FILTER TYPE</label>
          </td>
          <td>
            <input type="radio" id="nine_9m" name="rangeHoodType" value="r3">
            <label for="nine_9m" class="checkbox-text">900mm</label>
          </td>
          <td>
            <input type="radio" id="six_6m" name="rangeHoodType" value="r4">
            <label for="six_6m" class="checkbox-text">600mm</label>
          </td>
          <td>
            <input type="text" class="othersField" id="rangeHoodType_field" name="rangeHoodType_Field" required>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>Refrigerator</td>
    <td><input type="text" name="width_Refrigerator" class="input" placeholder="ex. XXmm (unit in MM)" required>
      <label class="checkbox-text">WIDTH</label>
    </td>
    <td><input type="text" name="depth_Refrigerator" class="input" placeholder="ex. XXmm (unit in MM)" required>
      <label class="checkbox-text">DEPTH</label>
    </td>
    <td><input type="text" name="height_Refrigerator" class="input" placeholder="ex. XXmm (unit in MM)" required>
      <label class="checkbox-text">HEIGHT</label>
    </td>
  </tr>
  <tr>
    <td>Sink</td>
    <td><input type="text" name="width_Sink" class="input" placeholder="ex. XXmm (unit in MM)" required>
      <label class="checkbox-text">WIDTH</label>
    </td>
    <td><input type="text" name="depth_Sink" class="input" placeholder="ex. XXmm (unit in MM)" required>
      <label class="checkbox-text">DEPTH</label>
    </td>
    <td><input type="text" name="height_Sink" class="input" placeholder="ex. XXmm (unit in MM)" required>
      <label class="checkbox-text">HEIGHT</label>
    </td>
  </tr>
  <tr>
    <td>Microwave</td>
    <td><input type="text" name="width_Microwave" class="input" placeholder="ex. XXmm (unit in MM)" required>
      <label class="checkbox-text">WIDTH</label>
    </td>
    <td><input type="text" name="depth_Microwave" class="input" placeholder="ex. XXmm (unit in MM)" required>
      <label class="checkbox-text">DEPTH</label>
    </td>
    <td><input type="text" name="height_Microwave" class="input" placeholder="ex. XXmm (unit in MM)" required>
      <label class="checkbox-text">HEIGHT</label>
    </td>
  </tr>

  <!-- OTHER MODEL -->

  <!-- TODO: ADD CHECKBOX ID THIS INPUT WILL BE USED, ELSE KEEP INPUT TEXT AS DISPLAY NONE -->

  <tr>
    <td>
      <input type="checkbox" id="otherModel" name="otherModel">
      <label for="otherModel">Model/Brand (OTHER APPLIANCES, PLS SPECIFY)</label>
    </td>
    <td colspan="5">
      <table id="modelDimensions">
        <tr>
          <td>
            <input type="text" name="model_brand" id="model_brand" class="input" placeholder="ex. Dishwasher, Anson">
          </td>
          <td><input type="text" name="width_model_brand" id="width_model_brand" class="input"
              placeholder="ex. XXmm (unit in MM)">
            <label class="checkbox-text">WIDTH</label>
          </td>
          <td><input type="text" name="depth_model_brand" id="depth_model_brand" class="input"
              placeholder="ex. XXmm (unit in MM)">
            <label class="checkbox-text">DEPTH</label>
          </td>
          <td><input type="text" name="height_model_brand" id="height_model_brand" class="input"
              placeholder="ex. XXmm (unit in MM)">
            <label class="checkbox-text">HEIGHT</label>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>REMARKS:</td>
    <td colspan="3"><textarea id="remarks" name="remarks" rows="3" cols="10"></textarea></td>
  </tr>
  <tr>
    <td>Attachments:</td>
    <td><label>Plan</label>
      <input type="file" id="plan" name="plan" onchange="getFile(event)" accept="image/png, image/jpeg" required>
    </td>
    <td><label for="picture_loc_ceiling">Picture of location and ceilling if with cove</label><input type="file"
        id="plan" name="plan" onchange="getFile(event)" accept="image/png, image/jpeg" required></td>
  </tr>
  <tr>
    <td>Submitted by:</td>
    <td><input type="text" name="submittedby" class="input" placeholder="" required></td>
    <td><label for="Date">Date:</label>
      <input type="date" id="submission_date" name="submission_date">
    </td>
  </tr>
  <tr>
    <td><button type="submit" class="button-confirm">Submit</button></td>
  </tr>
</form>
</table>

<style>
  .othersField {
    display: none;
  }

  #modelDimensions {
    display: none;
  }

  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
    display: flex;
    flex-flow: column;
    align-items: center;
    justify-content: center;
    height: auto;
  }

  form {
    --input-focus: #2d8cf0;
    --font-color: #323232;
    --font-color-sub: #131C31;
    --bg-color: #fff;
    --main-color: #323232;
    padding: 20px;
    background: lightgrey;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    gap: 20px;
    border-radius: 5px;
    border: 2px solid var(--main-color);
    box-shadow: 4px 4px var(--main-color);
  }

  th {
    color: var(--font-color);
    font-weight: 900;
    font-size: 21px;
    margin-bottom: 25px;
  }

  table {
    width: auto;
    border-collapse: collapse;
  }

  td {
    padding: 5px;
    color: var(--font-color-sub);
    font-weight: 600;
    font-size: 18px;
  }

  input[type="text"] {
    width: 250px;
    height: 40px;
    border-radius: 5px;
    border: 2px solid var(--main-color);
    background-color: var(--bg-color);
    box-shadow: 4px 4px var(--main-color);
    font-size: 15px;
    font-weight: 600;
    color: var(--font-color);
    padding: 5px 10px;
    outline: none;
  }

  input[type="text"]:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease-in-out;
  }

  .input::placeholder {
    color: var(--font-color-sub);
    opacity: 0.8;
  }


  /*input {
    width: auto;
    padding: 8px;
    box-sizing: border-box;
    margin-bottom: 10px;
    width: 250px;
    height: 40px;
    border-radius: 5px;
    border: 2px solid var(--main-color);
    background-color: var(--bg-color);
    box-shadow: 4px 4px var(--main-color);
    font-size: 15px;
    font-weight: 600;
    color: var(--font-color);
    padding: 5px 10px;
    outline: none;
  }*/

  button {
    margin: 5px auto 0 auto;
    width: 120px;
    height: 40px;
    border-radius: 5px;
    border: 2px solid var(--main-color);
    background-color: #93c47d;
    box-shadow: 4px 4px var(--main-color);
    font-size: 17px;
    font-weight: 600;
    color: var(--font-color);
    cursor: pointer;
  }

  button:hover {
    background-color: #45a049;
  }

  input[type="checkbox"] {
    margin-right: 10px;
    transform: scale(2);
  }

  label {
    font-size: 14px;
    font-weight: bold;
  }

  input[type="radio"] {
    margin-right: 5px;
    transform: scale(1);
    transition: transform 0.3s ease-in-out;
  }

  input[type="radio"]:hover {
    transform: scale(2);
  }
</style>