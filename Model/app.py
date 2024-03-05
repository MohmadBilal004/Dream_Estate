from flask import Flask, render_template, request
import pickle
import numpy as np

# setup application
app = Flask(__name__, static_url_path='/Static', static_folder='Static')


def prediction(lst):
    filename = 'predictor.pickle'
    with open(filename, 'rb') as file:
        model = pickle.load(file)
    pred_value = model.predict([lst])
    return pred_value

@app.route('/', methods=['POST', 'GET'])
def index():
    # return "Hello World"

    pred_value = 0
    if request.method == 'POST':
        # Get form values
        Baths = request.form.get('Baths', '')
        Landsize = request.form.get('txtLandsize', '')
        Beds = request.form.get('Beds', '')
        Housesize = request.form.get('txtHouseSize', '')
        BrandNew = request.form.getlist('chkBrandNew')
        Title = request.form.get('txtHouseType', '')
        Town = request.form.get('txtTown', '')
        District = request.form.get('txtDistrict', '')

        # Check for missing or empty values
        if '' in [Baths, Landsize, Beds, Housesize, Title, Town, District]:
            # Handle the error (print or return an error message)
            print("Error: All form fields are required.")
            return render_template('index.html', error_value='All form fields are required.')

        # Process form values
        feature_list = []

        feature_list.append(int(Baths))
        feature_list.append(float(Landsize))
        feature_list.append(int(Beds))
        feature_list.append(float(Housesize))
        feature_list.append(len(BrandNew))

        title_list = ['Title_', 'Title_Apartment House', 'Title_House', 'Title_House Villa', 'Title_Villa House']
        town_list = ['Town_ Angoda', 'Town_ Athurugiriya', 'Town_ Avissawella', 'Town_ Battaramulla', 'Town_ Boralesgamuwa', 'Town_ Colombo 1', 'Town_ Colombo 10', 'Town_ Colombo 12', 'Town_ Colombo 13', 'Town_ Colombo 14', 'Town_ Colombo 15', 'Town_ Colombo 2', 'Town_ Colombo 3', 'Town_ Colombo 4', 'Town_ Colombo 5', 'Town_ Colombo 6', 'Town_ Colombo 7', 'Town_ Colombo 8', 'Town_ Colombo 9', 'Town_ Dehiwala', 'Town_ Delgoda', 'Town_ Divulapitiya', 'Town_ Gampaha City', 'Town_ Ganemulla', 'Town_ Godagama', 'Town_ Hanwella', 'Town_ Homagama', 'Town_ Ja-Ela', 'Town_ Kadawatha', 'Town_ Kaduwela', 'Town_ Kandana', 'Town_ Katunayake', 'Town_ Kelaniya', 'Town_ Kesbewa', 'Town_ Kiribathgoda', 'Town_ Kohuwala', 'Town_ Kolonnawa', 'Town_ Kottawa', 'Town_ Kotte', 'Town_ Maharagama', 'Town_ Malabe', 'Town_ Meegoda', 'Town_ Minuwangoda', 'Town_ Mirigama', 'Town_ Moratuwa', 'Town_ Mount Lavinia', 'Town_ Nawala', 'Town_ Negombo', 'Town_ Nittambuwa', 'Town_ Nugegoda', 'Town_ Padukka', 'Town_ Pannipitiya', 'Town_ Piliyandala', 'Town_ Ragama', 'Town_ Rajagiriya', 'Town_ Ratmalana', 'Town_ Seeduwa', 'Town_ Talawatugoda', 'Town_ Veyangoda', 'Town_ Wattala', 'Town_ Wellampitiya', ]
        district_list = ['District_Colombo', 'District_Gampaha']

        def traverse_list(lst, value):
            for item in lst:
                if item == value:
                    feature_list.append(1)
                else:
                    feature_list.append(0)

        traverse_list(title_list, Title)
        traverse_list(town_list, Town)
        traverse_list(district_list, District)

        pred_value = prediction(feature_list)
        print(pred_value)

    return render_template('index.html', pred_value=pred_value)

if __name__ == '__main__':
    app.run(debug=True)
